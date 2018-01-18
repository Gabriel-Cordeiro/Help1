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
    //[Authorize]
    public class usuariosController : ApiController
    {

        UsuariosHelpOne usuarioHelpOne = new UsuariosHelpOne();

        // GET: api/usuarios
        public HttpResponseMessage Get()
        {
            try
            {
                List<usuario> allUsers = usuarioHelpOne.getAllUsers();
                return Request.CreateResponse(HttpStatusCode.OK, allUsers);
            }
            catch (Exception)
            {

                return Request.CreateResponse(HttpStatusCode.InternalServerError, ("Internal Server Error"));
            }
           
        }

        // GET: api/usuarios?login=login&password=password
        [ResponseType(typeof(usuario))]
        public HttpResponseMessage Get(string login, string password)
        {
            usuario usuario = usuarioHelpOne.getUserByLoginAndPassword(login, password);

            if (usuario == null)
            {
                return Request.CreateResponse(HttpStatusCode.NotFound,("User or login are incorrect"));              
                //return NotFound();
            }

            return Request.CreateResponse(HttpStatusCode.OK, usuario);
        }

        // GET: api/usuarios/1
        [ResponseType(typeof(usuario))]
        public HttpResponseMessage Get(int id)
        {
            usuario usuario = usuarioHelpOne.getUserById(id);

            if (usuario == null)
            {
                return Request.CreateResponse(HttpStatusCode.NotFound, "User does not exist");
            }

            return Request.CreateResponse(HttpStatusCode.OK, usuario);
        }

        //PUT: api/usuarios/5
        [ResponseType(typeof(void))]
        public HttpResponseMessage Put(int id, usuario usuario)
        {
            if (!ModelState.IsValid && id != usuario.id_usuario)
            {
                 return Request.CreateResponse(HttpStatusCode.NotAcceptable, "Model is invalid or user id is incorrect");
            }

            if (usuarioHelpOne.isAUserValid(usuario))
            {

                try
                {
                    usuarioHelpOne.Update(usuario);
                    return Request.CreateResponse(HttpStatusCode.OK, "User have been updated");
                }
                catch (Exception)
                {

                    return Request.CreateResponse(HttpStatusCode.NotModified, "User does not have been updated, try again");
                }
            }
            else
            {
                return Request.CreateResponse(HttpStatusCode.NotModified, "The object user was invalid with some values null");
            }
    
        }

        //// POST: api/usuarios
        //[ResponseType(typeof(usuario))]
        //public HttpResponseMessage Post(usuario usuario)
        //{
        //    if (!ModelState.IsValid)
        //    {
        //        return Request.CreateResponse(HttpStatusCode.NotAcceptable, "Model is invalid or user id is incorrect");
        //    }
        //    if(usuarioHelpOne.isAUserValid(usuario))
        //    {

        //    }
        //    else
        //    {

        //    }


        //    return CreatedAtRoute("DefaultApi", new { id = usuario.id_usuario }, usuario);
        //}

        //// DELETE: api/usuarios/5
        //[ResponseType(typeof(usuario))]
        //public IHttpActionResult DeleteUser(int id)
        //{
        //    usuario usuario = db.usuario.Find(id);
        //    if (usuario == null)
        //    {
        //        return NotFound();
        //    }

        //    db.usuario.Remove(usuario);
        //    db.SaveChanges();

        //    return Ok(usuario);
        //}

        //protected override void Dispose(bool disposing)
        //{
        //    if (disposing)
        //    {
        //        db.Dispose();
        //    }
        //    base.Dispose(disposing);
        //}

        //private bool UserExists(int id)
        //{
        //    return db.usuario.Count(e => e.id_usuario == id) > 0;
        //}
    }
}