using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using Microsoft.Owin.Security.OAuth;
using System.Security.Claims;
using System.Threading.Tasks;
using HelpOneApi.Models;

namespace HelpOneApi.Providers
{
    public class ApplicationOAuthProvider : OAuthAuthorizationServerProvider
    {
        public override Task ValidateClientAuthentication(OAuthValidateClientAuthenticationContext c)
        {
            c.Validated();
            return Task.FromResult<object>(null);
        }

        public override Task GrantResourceOwnerCredentials(OAuthGrantResourceOwnerCredentialsContext c)
        {
            AdministratorsHelpOne verificaUsuario = new AdministratorsHelpOne();

            //Verifica se os dados informados estão corretos, caso sim retorna Token de autenticação
            if (verificaUsuario.ExistUser(c.UserName, c.Password))
            {
                Claim claim1 = new Claim(ClaimTypes.Name, c.UserName);
                Claim[] claims = new Claim[] { claim1 };
                ClaimsIdentity claimsIdentity =  new ClaimsIdentity(claims, OAuthDefaults.AuthenticationType);
                c.Validated(claimsIdentity);
            }
            else
            {
                c.SetError("Login or password are incorrect");
            }

            return Task.FromResult<object>(null);
        }
    }
}