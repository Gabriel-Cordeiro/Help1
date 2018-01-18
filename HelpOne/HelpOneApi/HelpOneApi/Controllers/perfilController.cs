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
    public class perfilController : ApiController
    {
        private helponeEntities db = new helponeEntities();

        // GET: api/perfil
        public IQueryable<perfil> Getperfil()
        {
            return db.perfil;
        }

        // GET: api/perfil/5
        [ResponseType(typeof(perfil))]
        public IHttpActionResult Getperfil(int id)
        {
            perfil perfil = db.perfil.Find(id);
            if (perfil == null)
            {
                return NotFound();
            }

            return Ok(perfil);
        }

        // PUT: api/perfil/5
        [ResponseType(typeof(void))]
        public IHttpActionResult Putperfil(int id, perfil perfil)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != perfil.id_perfil)
            {
                return BadRequest();
            }

            db.Entry(perfil).State = EntityState.Modified;

            try
            {
                db.SaveChanges();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!perfilExists(id))
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

        // POST: api/perfil
        [ResponseType(typeof(perfil))]
        public IHttpActionResult Postperfil(perfil perfil)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            db.perfil.Add(perfil);
            db.SaveChanges();

            return CreatedAtRoute("DefaultApi", new { id = perfil.id_perfil }, perfil);
        }

        // DELETE: api/perfil/5
        [ResponseType(typeof(perfil))]
        public IHttpActionResult Deleteperfil(int id)
        {
            perfil perfil = db.perfil.Find(id);
            if (perfil == null)
            {
                return NotFound();
            }

            db.perfil.Remove(perfil);
            db.SaveChanges();

            return Ok(perfil);
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }

        private bool perfilExists(int id)
        {
            return db.perfil.Count(e => e.id_perfil == id) > 0;
        }
    }
}