using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using MySqlConnector;
using System.Data;

namespace DZ3_SOAP_WSDL_02
{
    /// <summary>
    /// Summary description for WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {
        

        [WebMethod]
        public string HelloWorld()
        {
            return "Hello World";
        }
        [WebMethod]
        public int GetSquare(int a)
        {
            return (a * a);
        }
        [WebMethod]
        public float konverzijaBAMToEUR(float bam)
        {
            return (float)(bam * 1.96);
        }

        [WebMethod]
        public float konverzijaEURToBAM(float eur)
        {
            return (float)(eur * 0.51);
        }
    }
}
