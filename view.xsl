<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="html"/>
	<xsl:template match="/">
		<html>
			<head></head>

			<body>
				<xsl:for-each select="root/date[id=$id]">
					<xsl:value-of select="id"/>
					<img src="{image}"/>
				</xsl:for-each>

				<xsl:element name="a">
					<xsl:attribute name="href">
						<xsl:value-of select="root/date/back"/>
					</xsl:attribute>
					<span>Back</span>
				</xsl:element>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
