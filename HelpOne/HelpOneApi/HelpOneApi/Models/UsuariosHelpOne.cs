using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace HelpOneApi.Models
{
    public class UsuariosHelpOne
    {

        public List<usuario> getAllUsers()
        {
            helponeEntities db = new helponeEntities();

            return db.usuario.ToList();
        }


        public usuario getUserByLoginAndPassword(string login, string password)
        {
            helponeEntities db = new helponeEntities();

            return db.usuario.Where(x => x.tx_login == login && x.tx_senha == password).FirstOrDefault();
        }

        public usuario getUserById(int id)
        {
            helponeEntities db = new helponeEntities();

            return db.usuario.Where(x => x.id_usuario == id).FirstOrDefault();
        }

        public void Update(usuario usuario)
        {
            var db = new helponeEntities();
            db.Entry(usuario).State = EntityState.Modified;

            #region .:db.SaveChanges:.

            try
            {
                db.SaveChanges();
            }
            catch (System.Data.Entity.Validation.DbEntityValidationException dbEx)
            {
                var raise = (from validationErrors in dbEx.EntityValidationErrors
                             from validationError in validationErrors.ValidationErrors
                             select string.Format("{0}:{1}", validationErrors.Entry.Entity, validationError.ErrorMessage)).Aggregate<string, Exception>(dbEx,
                        (current, message) => new InvalidOperationException(message, current));
                throw raise;
            }

            #endregion
        }

        #region aux
        public bool isAUserValid(usuario user)
        {
            if(user == null || user.id_usuario == 0)
            {
                return false;
            }

            if(String.IsNullOrEmpty(user.tx_nome) || String.IsNullOrEmpty(user.tx_senha) || String.IsNullOrEmpty(user.tx_email) || String.IsNullOrEmpty(user.tx_cpf))
            {
                return false;
            }

            return true;
        }

        #endregion
    }
}