using System;
using System.Web;
using System.Web.UI.HtmlControls;
using System.Net.Mail;

public partial class precalif : System.Web.UI.Page
{

	protected void Page_Load(object sender, EventArgs e)
	{
		string MAILCONF_SMTP_SERVER = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_SMTP_SERVER"];
		string MAILCONF_SMTP_PORT = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_SMTP_PORT"];
		string MAILCONF_SMTP_SSL = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_SMTP_SSL"];
		string MAILCONF_SMTP_USERNAME = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_SMTP_USERNAME"];
		string MAILCONF_SMTP_PASSWORD = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_SMTP_PASSWORD"];

		string MAILCONF_REMITENTE = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_PRECALIFICATE_REMITENTE"];
		string MAILCONF_DESTINATARIO_1 = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_PRECALIFICATE_DESTINATARIO_1"];
		string MAILCONF_DESTINATARIO_2 = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_PRECALIFICATE_DESTINATARIO_2"];
		string MAILCONF_DESTINATARIO_3 = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_PRECALIFICATE_DESTINATARIO_3"];
		string MAILCONF_ASUNTO = System.Configuration.ConfigurationSettings.AppSettings["MAILCONF_PRECALIFICATE_ASUNTO"];

		retorno.Text = "ERROR al enviar formulario.";
		
		try
		{
			
			string Contenido = "<p align='left'><font face='verdana' size='2'>Formulario PRECALIFICATE desde Sitio Web<br><br>";
			Contenido = Contenido + "<font face='verdana' size='2'>Nombre y Apellido: " + Request.Form["NombreYApellido"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>E-mail: " + Request.Form["Email"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>Teléfono: " + Request.Form["Telefono"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>Celular: " + Request.Form["Celular"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>Empresa: " + Request.Form["Empresa"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>CUIT: " + Request.Form["CUIT"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>Rubro: " + Request.Form["Rubro"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>Código de AFIP: " + Request.Form["AFIP"] + "<br>";
			Contenido = Contenido + "<font face='verdana' size='2'>Actividad: " + Request.Form["Actividad"] + "<br>";

			MailMessage emailMessage = new MailMessage();
			emailMessage.BodyEncoding = System.Text.Encoding.UTF8;
			emailMessage.IsBodyHtml = true;
			emailMessage.Priority = MailPriority.Normal;

			emailMessage.From = new MailAddress(MAILCONF_REMITENTE);

			emailMessage.To.Add(new MailAddress(MAILCONF_DESTINATARIO_1));
			if (MAILCONF_DESTINATARIO_2 != "")
				emailMessage.To.Add(new MailAddress(MAILCONF_DESTINATARIO_2));
			if (MAILCONF_DESTINATARIO_3 != "")
				emailMessage.To.Add(new MailAddress(MAILCONF_DESTINATARIO_3));

			emailMessage.Subject = MAILCONF_ASUNTO;

			emailMessage.Body = Contenido;

			SmtpClient MailClient = new SmtpClient(MAILCONF_SMTP_SERVER, int.Parse(MAILCONF_SMTP_PORT));

			if (MAILCONF_SMTP_SSL != "")
				MailClient.EnableSsl = true;

			if (MAILCONF_SMTP_USERNAME != "" && MAILCONF_SMTP_PASSWORD != "")
				MailClient.Credentials = new System.Net.NetworkCredential(MAILCONF_SMTP_USERNAME, MAILCONF_SMTP_PASSWORD);

			HttpFileCollection uploadFiles = Request.Files;
			for (int i=0; i<uploadFiles.Count; i++)	{
				HttpPostedFile file = uploadFiles[i];
				Attachment attachment = new Attachment(file.InputStream, file.FileName);
				emailMessage.Attachments.Add(attachment);
			}
			
			//xxx
			System.Net.ServicePointManager.SecurityProtocol = System.Net.SecurityProtocolType.Ssl3 | System.Net.SecurityProtocolType.Tls12 | SecurityProtocolType.Tls11 | SecurityProtocolType.Tls;

			MailClient.Send(emailMessage);
			
			retorno.Text = "Formulario enviado exitosamente.";

		}
		catch (Exception ex)
		{
			string error = ex.ToString();
			retorno.Text = "Error al enviar formulario. <!-- " + error.Replace("<!--", "<!- -").Replace("-->", "- ->") + "-->";
		}

    }

}
