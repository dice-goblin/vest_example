<?php defined('_JEXEC') or die('Restricted access');

 class archiveImporterXMLFactory 
{	
	public static function getImporter($importer)
	{
        switch ($importer)
        {

        case 'articulus':
            return new archiveImporterXMLArticulus;
        case'layout':
            return new archiveImporterXmlNative;
        case'sarticle':
		    return new archiveImporterXmlSarticle;
        default:
            throw new Exception ('SJArchive.UnknownXMLType');

         }
	}
	

}
