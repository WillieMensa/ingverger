<%@ Language=VBScript %>
<%
' Permanent redirection
Response.Status = "301 Moved Permanently"
Response.AddHeader "Location", "http://www.ingverger.com.ar/index.html"
Response.End
%>
