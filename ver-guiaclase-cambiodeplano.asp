<%@ Language=VBScript %>
<%
' Permanent redirection
Response.Status = "301 Moved Permanently"
Response.AddHeader "Location", "./ver-publicac-rep-graf.php"
Response.End
%>
