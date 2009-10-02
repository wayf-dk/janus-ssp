<?php
/**
 * @author Jacob Christiansen, <jach@wayf.dk>
 * @author Sixto Martín, <smartin@yaco.es>
 */

// Dictionary for JANUS module
$lang = array(
	
	// new user		  
	'text_new_user_created' => array(
		'da' => 'En brugerkonto er nu oprettet for %USERID%.<br /> For at indtaste flere oplysninger om dig selv, følg linket.',
		'en' => 'A user account has been created for %USERID%.<br /> To enter more information about yourself, follow the link.',
		'es' => 'Una cuenta de usuario ha sido creada para %USERID%.<br /> Para introducir más información acerca de ti, sigue el enlace.',
	),
	
	'header_new_user' => array(
		'da' => 'Opret ny brugerkonto',
		'en' => 'Create new user account',
		'es' => 'Crear una nueva cuenta de usuario',
	),
	
	'text_create_new_user' => array(
		'da' => 'Du er ved at oprette en konto i JANUS med brugernavnet %USERID%.<br />Tryk på enter for at oprette en konto.',
		'en' => 'You are about to create an account I JANUS with the username %USERID%.<br />Push enter to create account',
		'es' => 'Vas a crear una cuenta de usuario en JANUS con el nombre de usuario %USERID%.<br />Pulsa enter para crear la cuenta',
	),

	// Misc
	'text_select_type' => array(
		'da' => 'Vælg type',
		'en' => 'Please select type',
		'es' => 'Por favor selecciona un tipo',
	),
	
	'text_submit_button' => array(
		'da' => 'Opret',
		'en' => 'Create',
		'es' => 'Crear',
	),
	
	'text_dashboard' => array(
		'da' => 'Kontrolpanel',
		'en' => 'Dashboard',
		'es' => 'Panel',
	),

	'text_entity_created' => array(
		'da' => 'Forbindelse oprettet',
		'en' => 'Connection created',
		'es' => 'Conexión creada',
	),

	'text_export_federation_desc' => array (
		'da' => 'Seleccione uno de los filtros y si quiere descargarlo, verlo en forma de xml o de texto',
		'en' => 'Choose a filter and choose if you want download or view in xml or text format',
		'es' => 'Seleccione uno de los filtros y si quiere descargarlo, verlo en forma de xml o de texto',
	),

	'text_idp&sp-all' => array(
        'da' => 'Institutioner (IdP) og Tjenester (SP)',
        'en' => 'Identity Providers (IdP) and Service Providers (SP)',
        'es' => 'Proveedores de Identidad (IdP) y Proveedores de Servicio (SP)',
    ),
    
    'text_idp-all' => array(
        'da' => 'Alle Institutioner (IdP)',
        'en' => 'All Identity Providers (IdP)',
        'es' => 'Todos los Proveedores de Identidad (IdP)',
    ),
	
    'text_sp-all' => array(
		'da' => 'Alle Tjenester (SP)',
        'en' => 'All Service Providers (SP)',
        'es' => 'Todos los Proveedores de Servicio (SP)',
    ),

	'text_saml20-all' => array(
	    'da' => 'SAML Institutioner (IdP) og SAML Tjenester (SP)',
		'en' => 'Identity Providers (IdP) and SAML Service Providers (SP)',
		'es' => 'Proveedores de Identidad SAML(IdP) y Proveedores de Servicio SAML(SP)',
	),
    
    'text_shib13-all' => array(
        'da' => 'Shib Institutioner (IdP) og Shib Tjenester (SP)',
        'en' => 'Shib Identity Providers (IdP) and Shib Service Providers (SP)',
        'es' => 'Proveedores de Identidad Shib (IdP) y Proveedores de Servicio Shib (SP)',
    ),

	'text_saml20-idp' => array(
		'da' => 'SAML Institutioner (IdP)',
		'en' => 'SAML Identity Providers (IdP)',
		'es' => 'Proveedores de Identidad SAML (IdP)',
	),

	'text_saml20-sp' => array(
		'da' => 'SAML Tjenester (SP)',
		'en' => 'SAML Service Providers (SP)',
		'es' => 'Proveedores de Servicio SAML (SP)',
	),

	'text_shib13-sp' => array(
		'da' => 'Shib Tjenester (SP)',
		'en' => 'Shib Service Providers (SP)',
		'es' => 'Proveedores de Servicio Shib (SP)',
	),

	'text_shib13-idp' => array(
		'da' => 'Shib Institutioner (IdP)',
		'en' => 'Shib Identity Providers (IdP)',
		'es' => 'Proveedores de Identidad Shib (IdP)',
	),

	// Dashboard Tabs
	'tab_user_data_header' => array(
		'da' => 'Bruger',
		'en' => 'User',
		'es' => 'Usuario',
	),

	'tab_user_data_subheader' => array(
		'da' => 'Konto oplyninger',
		'en' => 'Account information',
		'es' => 'Información de la cuenta',
	),

	'tab_user_data_email' => array(
		'da' => 'E-mail',
		'en' => 'E-mail',
		'es' => 'E-mail',
	),

	'tab_user_data_username' => array(
		'da' => 'Bruger ID',
		'en' => 'User ID',
		'es' => 'Nombre de usuario',
	),

	'tab_user_data_otherinfo' => array(
		'da' => 'Andre oplysninger',
		'en' => 'Other informations',
		'es' => 'Otra información',
	),
	
	'tab_entities_header' => array(
		'da' => 'Forbindelser',
		'en' => 'Connections',
		'es' => 'Conexiones',
	),

    'tab_message_header' => array(
        'da' => 'Indbakke',
        'en' => 'Inbox',        
    ),

	'tab_entities_new_entity_subheader' => array(
		'da' => 'Ny forbindelse',
		'en' => 'New Connection',
		'es' => 'Nueva conexión',
	),

	'tab_entities_new_entity_text' => array(
		'da' => 'Indtast nyt forbindelsesID',
		'en' => 'Enter new connection ID',
		'es' => 'Introducir nueva ID de conexión',
	),
	
	'tab_entities_entities_subheader' => array(
		'da' => 'Eksisterende forbindelse',
		'en' => 'Existing Connection',
		'es' => 'Conexiones existentes',
	),

	'tab_admin_header' => array(
		'da' => 'Administrator',
		'en' => 'Admin',
		'es' => 'Administrador',
	),

	'tab_federation_header' => array(
		'da' => 'Føderation',
		'en' => 'Federation',
		'es' => 'Federación',
	),

	'tab_admin_tab_users_header' => array(
		'da' => 'Brugere',
		'en' => 'Users',
		'es' => 'Usuarios',
	),
	
	'tab_admin_tab_entities_header' => array(
		'da' => 'Forbindelser',
		'en' => 'Connections',
		'es' => 'Conexiones',
	),
	
	// Errors
	'error_header' => array(
		'da' => 'Fejl',
		'en' => 'Error',
		'es' => 'Error',
	),
	
	'error_entity_exists' => array(
		'da' => 'Forbindelses ID findes i forvejen',
		'en' => 'Connection ID already exists',
		'es' => 'La ID de conexion ya existe',
	),

    'error_entity_not_url' => array(
        'da' => 'Forbindelses ID skal være en gyldig URL jf. RFC1738.<br />Kun alfanumeriske tegn og $&\'-_.,;=+!*()~/% kan bruges i forbindelses ID\'er.',
        'en' => 'The connection ID should be a valid URL complying to the RFC1738.</br />Only alphanumeric characters and $&\'-_.,;=+!*()~/% may be used in entity ids.',
	    'es' => 'La ID de conexión debería ser una URL válida que cumpla en RFC1738.</br>Solo caracteres alfanuméricos y $&\'-_.,;=+!*()~/% deben ser usados en los identificadores de indentidad.',
    ),

    'error_no_type' => array(
        'da' => 'Angiv forbindelsestype',
        'en' => 'Please select connection type',
	    'es' => 'Por favor seleccione un tipo de conexión',
    ),
	
    //Edit entity tabs
	'edit_entity_header' => array(
		'da' => 'Rediger forbindelse',
		'en' => 'Edit connection',
		'es' => 'Editar conexión',
	),
	
	'tab_edit_entity_connection' => array(
		'da' => 'Forbindelse',
		'en' => 'Connection',
		'es' => 'Conexión',
	),

	'tab_edit_entity_connection_revision' => array(
		'da' => 'Revision',
		'en' => 'Revision',
		'es' => 'Revisión',
	),
	
	'tab_edit_entity_revision_note' => array(
		'da' => 'Revisionsnote',
		'en' => 'Revision note',
		'es' => 'Notas de la revisión',
	),
	
	'tab_edit_entity_history' => array(
		'da' => 'Historik',
		'en' => 'History',
		'es' => 'Histórico',
	),
	
	'tab_edit_entity_show_hide' => array(
		'da' => 'Vis/Gem hele historikken',
		'en' => 'Show/Hide complete history',
		'es' => 'Mostrar/Ocultar la historia completa',
	),

	'tab_edit_entity_import_from_url' => array(
        'da' => 'Importer fra URL',
        'en' => 'Import from URL',
        'es' => 'Importar de una URL',
    ),

    'tab_edit_entity_import_from_url' => array(
        'da' => 'Importer fra URL',
        'en' => 'Import from URL',
        'es' => 'Importar de una URL',
    ),

	'tab_edit_entity_export' => array(
		'da' => 'Eksporter',
		'en' => 'Export',
		'es' => 'Exportar',
	),
	
	'tab_edit_entity_export_metadata' => array(
		'da' => 'Eksporter metadata',
		'en' => 'Export metadata',
		'es' => 'Exportar medatados',
	),
	
    'tab_edit_entity_save' => array(
        'da' => 'Gem',
        'en' => 'Save',
	    'es' => 'Guardar',
    ),
	
    'tab_edit_entity_select' => array(
		'da' => 'Vælg',
		'en' => 'Select',
		'es' => 'Seleccionar',
	),
	
	'tab_edit_entity_import_xml' => array(
		'da' => 'Importer XML',
		'en' => 'Import XML',
		'es' => 'Importar XML',
	),
	
    'tab_edit_entity_entry' => array(
        'da' => 'Felt',
        'en' => 'Entry',
	    'es' => 'Entrada',
    ),

	'tab_edit_entity_value' => array(
		'da' => 'Værdi',
		'en' => 'Value',
		'es' => 'Valor',
	),
	
    'tab_edit_entity_parent_revision' => array(
        'da' => 'Forrig revision',
        'en' => 'Parent revision',
	    'es' => 'Revisión padre',
    ),
    
    'tab_edit_entity_state' => array(
        'da' => 'Tilstand',
        'en' => 'State',
	    'es' => 'Estado',
    ),


	'tab_edit_entity_connection_entityid' => array(
		'da' => 'Forbindelses ID',
		'en' => 'Connection ID',
		'es' => 'ID de conexión',
	),
	
	'tab_remote_entity_saml20-sp' => array(
		'da' => 'Institution (IdP)',
		'en' => 'Indentity Provider (IdP)',
		'es' => 'Proveedores de Identidad (IdP)',
	),
	
	'tab_remote_entity_saml20-idp' => array(
		'da' => 'Tjenester (SP)',
		'en' => 'Service Provider (SP)',
		'es' => 'Proveedores de Servicio (SP)',
	),

	'tab_remote_entity_help_saml20-idp' => array(
		'da' => 'Marker de tjenester som du ikke ønsker dine brugere skal have adgang til.',
		'en' => 'Mark services that your users are not allowed to access.',
		'es' => 'Marca los servicios a los que a tus usuarios no les está permitido acceder',

	),

	'tab_remote_entity_help_saml20-sp' => array(
		'da' => 'Marker de institutioner som du ikke ønsker brugere fra.',
		'en' => 'Mark those identity providers which are not allowed to acces your service.',
		'es' => 'Marca aquellos Proveedores de identidad a los que no les está permitido el acceso a tu servicio.', 
	),

	'tab_remote_entity_allowall' => array(
		'da' => 'Tillad alle',
		'en' => 'Allow all',
		'es' => 'Permitir todos',
	),

	'tab_metadata' => array(
		'da' => 'Metadata',
		'en' => 'Metadata',
		'es' => 'Metadatos',
	),

	'tab_import_metadata' => array(
		'da' => 'Importer metadata',
		'en' => 'Import metadata',
		'es' => 'Importar metadatos',
	),
	
	'text_entities_help' => array(
		'da' => 'Klik på en tjeneste eller institution for at administrere forbindelser.',
		'en' => 'Click on a service provider or identity provider to administer connections.',
		'es' => 'Haz clik sobre el proveedor de servicio o el identificador de identidad para administrar las conexiones.',
	),
	
	'status_metadata_parsed_ok' => array(
		'da' => 'Metadata importeret korrekt',
		'en' => 'Metadata imported',
		'es' => 'Metadatos importados',
	),

    // Import
    'add_metadata_from_url_desc' => array(
        'da' => 'Hent metadata fra en URL. Denne URL skal pege på en xml-fil med metadata.',
        'en' => 'Get metadata from a URL. This URL must target a xml file with the metadatas of the entity.',
        'es' => 'Obtener los metadatos a partir de una url. Esta url debe apuntar a un xml que contenga los metadatos de la entidad.',
    ),

    'get_metadata' => array(
        'da' => 'Hent metadata',
        'en' => 'Get metadata',
        'es' => 'Obtener metadatos',
    ),

    'error_import_metadata_permission' => array(
        'da' => 'Du har ikke tilladelse til at importere metadata',
        'en' => 'You do not have permission to import metadata.',
        'es' => 'No tienes permisos para importar metadatos.',
    ),

    'error_import_metadata_url' => array(
        'da' => 'Kan ikke importere. Ugyldig metadata URL.',
        'en' => 'Can not import. Invalid metadata URL.',
        'es' => 'No se pudo importar. URL de metadatos no v√°lida.',
    ),

	'error_entityid_no_match' => array(
		'da' => 'Entity id i metadata er ikke korrekt',
		'en' => 'Entity id in metadata do not match',
		'es' => 'El identificador de entidad no concuerda con los metadatos',
	),
	
	'error_metadata_not_parsed' => array(
		'da' => 'Fejl ved import af metadata',
		'en' => 'Error when parsing imported metadata',
		'es' => 'Error mientras se parseaban los metadatos importados',
	),
	
	// Export
	'export_text' => array(
		'da' => 'Her under kan du se dit metadata',
		'en' => 'Here you can see your metadata',
		'es' => 'Aquí puedes ver tus metadatos',
	),
	
	'export_intro' => array(
		'da' => 'Her under kan du se dit metadata',
		'en' => 'Here you can see your metadata',
		'es' => 'Aquí puedes ver tus metadatos',
	),

	'tab_entities_federation_entity_subheader' => array(
        'da' => 'Føderations metadata',
        'en' => 'Federation metadata',
        'es' => 'Federación de metadatos',
	),

	'tab_entities_federation_entity_description' => array(
        'da' => 'Klik her for at eksportere føderationsmetadata',
        'en' => 'Click here to export the metadata set of entities of the federation',
        'es' => 'Haz click aqui para exportar el conjunto de metadatos de las entidades de la federación',
	),

    // Admin tab
	'admin_permission' => array(
		'da' => 'Tilladelser',
		'en' => 'Permissions',
		'es' => 'Permisos',
	),
	
    'admin_users' => array(
		'da' => 'Brugere',
		'en' => 'Users',
		'es' => 'Usuarios',
	),

    'admin_add_user' => array(
        'da' => 'Tilføj ny bruger',
        'en' => 'Add new user', 
        'es' => 'Añadir un nuevo usuario',       
    ),

    'admin_add' => array(
		'da' => 'Tilføj',
		'en' => 'Add',
		'es' => 'Añadir',
	),

    'admin_remove' => array(
		'da' => 'Fjern',
		'en' => 'Remove',
		'es' => 'Borrar',
	),

    'admin_action' => array(
		'da' => 'Handling',
		'en' => 'Action',
		'es' => 'Acción',
	),

    'admin_delete' => array(
		'da' => 'Slet',
		'en' => 'Delete',
		'es' => 'Eliminar',
	),

    'admin_edit' => array(
        'da' => 'Rediger',
        'en' => 'Edit',        
        'es' => 'Editar',
    ),

    'admin_save' => array(
        'da' => 'Gem',
        'en' => 'Save',
        'es' => 'Guardar',        
    ),

    'admin_active' => array(
        'da' => 'Aktiv',
        'en' => 'Active',        
        'es' => 'Activo',
    ),

    'admin_type' => array(
		'da' => 'Type',
		'en' => 'Type',
		'es' => 'Tipo',
	),

    'admin_email' => array(
        'da' => 'E-mail',
        'en' => 'E-mail',
	    'es' => 'E-mail',
    ),

    'admin_userid' => array(
        'da' => 'Bruger ID',
        'en' => 'User ID',
	    'es' => 'ID de usuario',
    ),

	'admin_select_remove_user' => array(
		'da' => 'Vælg bruger som skal fjernes',
		'en' => 'Select user to remove',
		'es' => 'Selecciona usuario a eliminar',
	),
	
	'admin_select_add_user' => array(
		'da' => 'Vælg bruger som skal tilføjes',
		'en' => 'Select user to add',
		'es' => 'Selecciona usuario a añadir',
	),
	
	'accessblocker_header' => array(
		'da' => 'Adgang blokret',
		'en' => 'Access blocked',
		'es' => 'Acceso bloqueado',
	),

    'error_no_access' => array(
        'da' => 'Du har ikke adgang til denne ressource',
        'en' => 'You do not have access to this resource',
	'es' => 'No tienes acceso para acceder a este recurso',
    ),
    
    'text_help' => array(
        'da' => 'Hjælp',
        'en' => 'Help',
	    'es' => 'Ayuda',
    ),
	
    'error_user_not_created' => array(
		'da' => 'Brugeren blev ikke oprettet',
		'en' => 'The user was not created',
	),
    /*
	'' => array(
		'da' => '',
		'en' => '',
		'es' => '',
	),
	*/
);
?>
