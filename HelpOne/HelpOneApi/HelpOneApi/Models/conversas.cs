//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace HelpOneApi.Models
{
    using System;
    using System.Collections.Generic;
    
    public partial class conversas
    {
        public int id_conversa { get; set; }
        public Nullable<int> id_usuario { get; set; }
        public Nullable<int> id_usuario_destino { get; set; }
    
        public virtual usuario usuario { get; set; }
        public virtual usuario usuario1 { get; set; }
    }
}
