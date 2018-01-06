using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Data.Entity.Infrastructure;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using System.Web.Http.Description;
using HelpOneApi.Models;

namespace HelpOneApi.Controllers
{
    [Authorize]
    public class usuariosController : ApiController
    {
        private helponeEntities db = new helponeEntities();

        // GET: api/usuarios
        public IQueryable<usuario> GetUsers()
        {
            return db.usuario;
        }

        // GET: api/usuarios/5
        [ResponseType(typeof(usuario))]
        public IHttpActionResult GetUser(int id)
        {
            usuario usuario = db.usuario.Find(id);
            if (usuario == null)
            {
                return NotFound();
            }

            return Ok(usuario);
        }

        // PUT: api/usuarios/5
        [ResponseType(typeof(void))]
        public IHttpActionResult InsertUser(int id, usuario usuario)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != usuario.u_id)
            {
                return BadRequest();
            }

            db.Entry(usuario).State = EntityState.Modified;

            try
            {
                db.SaveChanges();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!UserExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return StatusCode(HttpStatusCode.NoContent);
        }

        // POST: api/usuarios
        [ResponseType(typeof(usuario))]
        public IHttpActionResult UpdateUser(usuario usuario)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            db.usuario.Add(usuario);
            db.SaveChanges();

            return CreatedAtRoute("DefaultApi", new { id = usuario.u_id }, usuario);
        }

        // DELETE: api/usuarios/5
        [ResponseType(typeof(usuario))]
        public IHttpActionResult DeleteUser(int id)
        {
            usuario usuario = db.usuario.Find(id);
            if (usuario == null)
            {
                return NotFound();
            }

            db.usuario.Remove(usuario);
            db.SaveChanges();

            return Ok(usuario);
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }

        private bool UserExists(int id)
        {
            return db.usuario.Count(e => e.u_id == id) > 0;
        }
    }
}