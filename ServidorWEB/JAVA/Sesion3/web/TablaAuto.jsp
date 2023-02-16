<%-- 
    Document   : TablaAuto
    Created on : Feb 16, 2023, 12:09:33 PM
    Author     : edison
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <style>
        table, tr, th{
            border: 1px solid black
        }
        </style>
    <body>
        <%! int j = 5; %>
        <h1>TABLAS</h1>
        <table>
            
            <%for (int i=0; i < 10; i++){%>
            <tr>
                <% for(int x=j-5; x <= j; x++){%>
                <th><%out.println(x);%></th>
                <%}%>
                
                <%j += 5;%>
            </tr>
            <%}%>
            
        </table>
    </body>
</html>
