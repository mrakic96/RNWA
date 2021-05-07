using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace DZ3_SOAP_WSDL_02
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void BtnPoziv_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebService1Soap klient = new ServiceReference1.WebService1SoapClient("WebService1Soap");
            int broj = int.Parse(InputBroj.Text);
            int rezultat = klient.GetSquare(broj);
            LblRezultat.Text = "Rezultat je: " + rezultat;
        }
    }
}