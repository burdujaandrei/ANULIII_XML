<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Proiect XML</title>
            </head>
            <body>       
            	<!-- works -->
<div id="works" class="portfolio spacer">
<div class="container">
<h2 class="center">Works</h2>

	<ul class="grid effect-2" id="grid">
		<li>
			<xsl:for-each select="root/date">	
			<xsl:apply-templates select="image"/>

    	<xsl:element name="a">
    		<xsl:attribute name="href">
    			<xsl:value-of select="view"/>
    		</xsl:attribute>
    		<span>View</span>
    	</xsl:element>

    	<xsl:element name="a">
    		<xsl:attribute name="href">
    			<xsl:value-of select="edit"/>
    		</xsl:attribute>
    		<span>Edit</span>
    	</xsl:element>

    	<xsl:element name="a">
    		<xsl:attribute name="href">
    			<xsl:value-of select="delete"/>
    		</xsl:attribute>
    		<xsl:attribute name="onclick">
    			<xsl:value-of select="confirm"/>
    		</xsl:attribute>
    		<span>Delete</span>
    	</xsl:element>
    	</xsl:for-each>
		</li>

	</ul>
</div>
        <center><a href="insert.php">Insert a new picture</a></center>

</div>
<!-- works -->
            </body>
        </html>
    </xsl:template>
      <xsl:template match="image">
    	<xsl:element name="img">
    		<xsl:attribute name="src">
    			<xsl:value-of select="src"/>
    		</xsl:attribute>

    		<xsl:attribute name="alt">
    			<xsl:value-of select="alt"/>
    		</xsl:attribute>
		</xsl:element>
	</xsl:template>

</xsl:stylesheet>