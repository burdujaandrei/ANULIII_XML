<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Proiect XML</title>
            </head>
            <body>       
<!-- testimonials -->
<div class="testimonials-bg">
<div class="testimonials center spacer">
	<div class="container">
	<h2>Testimonials</h2>

	<div id="carousel-testimonials" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner">	
		<xsl:for-each select="root/date">
		 	
			<div class="item active animated bounceInRight">

			<xsl:apply-templates select="image"/>
			<p><xsl:value-of select="content"/></p>
			<span><xsl:value-of select="title"/></span>
			
			</div>       
    	</xsl:for-each>
	</div>
	  
  	</div>

	</div>	
</div>
</div>
<!-- testimonials -->
   
            </body>
        </html>
    </xsl:template>
      <xsl:template match="image">
    	<xsl:element name="img">
    		<xsl:attribute name="src">
    			<xsl:value-of select="src"/>
    		</xsl:attribute>
    		<xsl:attribute name="width">
    			<xsl:value-of select="width"/>
    		</xsl:attribute>
    		<xsl:attribute name="alt">
    			<xsl:value-of select="alt"/>
    		</xsl:attribute>
    		<xsl:attribute name="class">
    			<xsl:value-of select="class"/>
    		</xsl:attribute>
    	</xsl:element>
    </xsl:template>

</xsl:stylesheet>