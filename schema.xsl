<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : schema.xsl
    Created on : 08 iunie 2020, 12:41
    Author     : burdu
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>schema.xsl</title>
            </head>
            <body>
                
                <table border="1">
                    <tr bgcolor="red">
                        <th style="width:300px">Nume</th>
                        <th style="width:300px">Prenume</th>
                        <th style="width:300px">Ocupatie</th>
                    </tr>
                    
                    <xsl:for-each select="root/date">
                        <tr>
                            <td style="width:300px"><xsl:value-of select="Nume"/></td>
                            <td style="width:300px"><xsl:value-of select="Prenume"/></td>
                            <td style="width:300px"><xsl:value-of select="Ocupatie"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
