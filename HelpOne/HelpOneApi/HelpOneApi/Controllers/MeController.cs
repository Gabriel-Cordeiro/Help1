using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using Microsoft.Owin.Security;
using System.Web;


namespace HelpOneApi.Controllers
{
    public class MeController : ApiController
    {
            // Retorna Nosso Authentication Manager
            private IAuthenticationManager Authentication
            {
                get { return HttpContext.Current.GetOwinContext().Authentication; }
            }

            // GET api/me
            // A tag Authorize obriga estar autenticado para acessar o mesmo
            [Authorize]
            public string Get()
            {
                return this.Authentication.User.Identity.Name;
            }    
    }
}
