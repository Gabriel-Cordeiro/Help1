using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace HelpOneApi.Models
{
    public class AdministratorsHelpOne
    {

        public bool ExistUser (string login, string password)
        {
            //Instancia do Entity do banco helpOne
            helponeEntities modelo = new helponeEntities();

            //Verifica se a consulta com os dois parametros retorna um administrador
            return modelo.adm.Count(x => x.login == login && x.password == password) > 0;
        }

    }
}