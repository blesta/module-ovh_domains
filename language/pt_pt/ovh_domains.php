<?php
/**
 * pt_pt language for the OVH Domains module.
 */
// Basics
$lang['OvhDomains.name'] = 'Domínios OVH';
$lang['OvhDomains.description'] = '';
$lang['OvhDomains.module_row'] = 'Conta';
$lang['OvhDomains.module_row_plural'] = 'Contas';
$lang['OvhDomains.module_group'] = 'Grupo de Conta';


// Module management
$lang['OvhDomains.add_module_row'] = 'Adicionar Conta';
$lang['OvhDomains.add_module_group'] = 'Adcionar Grupo de Contas';
$lang['OvhDomains.manage.module_rows_title'] = 'Contas';

$lang['OvhDomains.manage.module_rows_heading.application_key'] = 'Application Key';
$lang['OvhDomains.manage.module_rows_heading.secret_key'] = 'Secret Key';
$lang['OvhDomains.manage.module_rows_heading.consumer_key'] = 'Consumer Key';
$lang['OvhDomains.manage.module_rows_heading.endpoint'] = 'Endpoint';
$lang['OvhDomains.manage.module_rows_heading.options'] = 'Opções';
$lang['OvhDomains.manage.module_rows.edit'] = 'Editar';
$lang['OvhDomains.manage.module_rows.delete'] = 'Apagar';
$lang['OvhDomains.manage.module_rows.confirm_delete'] = 'Tem a certeza de que pretende eliminar esta conta';

$lang['OvhDomains.manage.module_rows_no_results'] = 'Não existem Contas.';

$lang['OvhDomains.manage.module_groups_title'] = 'Grupos';
$lang['OvhDomains.manage.module_groups_heading.name'] = 'Nome';
$lang['OvhDomains.manage.module_groups_heading.module_rows'] = 'Contas';
$lang['OvhDomains.manage.module_groups_heading.options'] = 'Opções';

$lang['OvhDomains.manage.module_groups.edit'] = 'Editar';
$lang['OvhDomains.manage.module_groups.delete'] = 'Apagar';
$lang['OvhDomains.manage.module_groups.confirm_delete'] = 'Tem a certeza de que pretende eliminar esta conta';

$lang['OvhDomains.manage.module_groups.no_results'] = 'Não Existe Conta em Grupo';


// Add row
$lang['OvhDomains.add_row.box_title'] = 'Domínios OVH - Adicionar Conta';
$lang['OvhDomains.add_row.add_btn'] = 'Adicionar Conta';


// Edit row
$lang['OvhDomains.edit_row.box_title'] = 'Domínios OVH - Editar Conta';
$lang['OvhDomains.edit_row.edit_btn'] = 'Atualizar Conta';


// Row meta
$lang['OvhDomains.row_meta.application_key'] = 'Application Key';
$lang['OvhDomains.row_meta.secret_key'] = 'Secret Key';
$lang['OvhDomains.row_meta.consumer_key'] = 'Consumer Key';
$lang['OvhDomains.row_meta.endpoint'] = 'Endpoint';


// Errors
$lang['OvhDomains.!error.application_key.valid'] = 'Application Key inválida';
$lang['OvhDomains.!error.secret_key.valid'] = 'Secret Key inválida';
$lang['OvhDomains.!error.consumer_key.valid'] = 'Consumer Key inválida';
$lang['OvhDomains.!error.endpoint.valid'] = 'Endpoint inválido';
$lang['OvhDomains.!error.module_row.missing'] = 'Ocorreu um erro interno. A linha do módulo não está disponível.';
$lang['OvhDomains.!error.domain.valid'] = 'Domínio inválido';
$lang['OvhDomains.!error.epp_code.valid'] = 'EPP Code deverá ser 1 ou 0.';
$lang['OvhDomains.!error.ns_count'] = 'São necessários pelo menos 2 Nameservers.';
$lang['OvhDomains.!error.ns_valid'] = 'Um ou mais Nameservers são inválidos.';


// WHOIS
$lang['OvhDomains.tab_whois'] = 'WHOIS';
$lang['OvhDomains.tab_whois.heading'] = 'WHOIS';
$lang['OvhDomains.tab_whois.field_submit'] = 'Atualizar WHOIS';


// Nameservers
$lang['OvhDomains.tab_nameservers'] = 'Nameservers';
$lang['OvhDomains.tab_nameservers.heading'] = 'Nameservers';
$lang['OvhDomains.tab_nameservers.field_submit'] = 'Atualizar Nameservers';


// DNS Records
$lang['OvhDomains.tab_dns'] = 'Registos DNS';
$lang['OvhDomains.tab_dns.heading'] = 'Registos DNS';
$lang['OvhDomains.tab_dns.heading_add'] = 'Adicionar Registo';
$lang['OvhDomains.tab_dns.record_type'] = 'Tipo de Registo';
$lang['OvhDomains.tab_dns.host'] = 'Host';
$lang['OvhDomains.tab_dns.value'] = 'Valor';
$lang['OvhDomains.tab_dns.ttl'] = 'TTL';
$lang['OvhDomains.tab_dns.options'] = 'Opções';
$lang['OvhDomains.tab_dns.field_delete'] = 'Apagar';
$lang['OvhDomains.tab_dns.field_add'] = 'Adicionar Registo';


// Settings
$lang['OvhDomains.tab_settings'] = 'Definições';
$lang['OvhDomains.tab_settings.heading'] = 'Definições';
$lang['OvhDomains.tab_settings.field_submit'] = 'Guardar Definições';


// Client WHOIS
$lang['OvhDomains.tab_client_whois'] = 'WHOIS';
$lang['OvhDomains.tab_client_whois.heading'] = 'WHOIS';
$lang['OvhDomains.tab_client_whois.field_submit'] = 'Atualizar WHOIS';


// Client Nameservers
$lang['OvhDomains.tab_client_nameservers'] = 'Nameservers';
$lang['OvhDomains.tab_client_nameservers.heading'] = 'Nameservers';
$lang['OvhDomains.tab_client_nameservers.field_submit'] = 'Atualizar Nameservers';


// Client DNS Records
$lang['OvhDomains.tab_client_dns'] = 'Registos DNS';
$lang['OvhDomains.tab_client_dns.heading'] = 'Registos DNS';
$lang['OvhDomains.tab_client_dns.record_type'] = 'Tipo de Registo';
$lang['OvhDomains.tab_client_dns.host'] = 'Host';
$lang['OvhDomains.tab_client_dns.value'] = 'Valor';
$lang['OvhDomains.tab_client_dns.ttl'] = 'TTL';
$lang['OvhDomains.tab_client_dns.options'] = 'Opções';
$lang['OvhDomains.tab_client_dns.field_delete'] = 'Apagar';
$lang['OvhDomains.tab_client_dns.field_add'] = 'Adicionar Registo';


// Client Settings
$lang['OvhDomains.tab_client_settings'] = 'Definições';
$lang['OvhDomains.tab_client_settings.heading'] = 'Definições';
$lang['OvhDomains.tab_client_settings.heading_auth_code'] = 'Código de Autorização';
$lang['OvhDomains.tab_client_settings.field_registrar_lock'] = 'Registrar Lock';
$lang['OvhDomains.tab_client_settings.field_registrar_lock_yes'] = 'Definir o Registrar Lock. Recomendado para impedir a transferência não autorizada.';
$lang['OvhDomains.tab_client_settings.field_registrar_lock_no'] = 'Autorizar o registrar lock para que o domínio possa ser transferido.';
$lang['OvhDomains.tab_client_settings.text_auth_code'] = 'Utilize este código de autorização para transferir o seu domínio para outro fornecedor.';
$lang['OvhDomains.tab_client_settings.field_submit'] = 'Guardar Definições';


// Transfer fields
$lang['OvhDomains.transfer.domain'] = 'Domínio';
$lang['OvhDomains.transfer.auth_info'] = 'Código de Autorização';


// Domain fields
$lang['OvhDomains.domain.domain'] = 'Domínio';


// Nameserver fields
$lang['OvhDomains.nameserver.ns1'] = 'Nameserver 1';
$lang['OvhDomains.nameserver.ns2'] = 'Nameserver 2';
$lang['OvhDomains.nameserver.ns3'] = 'Nameserver 3';
$lang['OvhDomains.nameserver.ns4'] = 'Nameserver 4';
$lang['OvhDomains.nameserver.ns5'] = 'Nameserver 5';


// Contact fields
$lang['OvhDomains.contact.first_name'] = 'Primeiro Nome';
$lang['OvhDomains.contact.last_name'] = 'Último Nome';
$lang['OvhDomains.contact.email'] = 'Endereço de E-mail';
$lang['OvhDomains.contact.address1'] = 'Morada 1';
$lang['OvhDomains.contact.address2'] = 'Morada 2';
$lang['OvhDomains.contact.city'] = 'Cidade';
$lang['OvhDomains.contact.state'] = 'Distrito';
$lang['OvhDomains.contact.zip'] = 'Código Postal';
$lang['OvhDomains.contact.country'] = 'Pais';
$lang['OvhDomains.contact.phone'] = 'Telefone';


// Service Fields
$lang['OvhDomains.service_fields.domain'] = 'Domínio';


// Package Fields
$lang['OvhDomains.package_fields.epp_code'] = 'EPP Code';
$lang['OvhDomains.package_fields.ns1'] = 'Nameserver 1';
$lang['OvhDomains.package_fields.ns2'] = 'Nameserver 2';
$lang['OvhDomains.package_fields.ns3'] = 'Nameserver 3';
$lang['OvhDomains.package_fields.ns4'] = 'Nameserver 4';
$lang['OvhDomains.package_fields.ns5'] = 'Nameserver 5';

$lang['OvhDomains.package_field.tooltip.epp_code'] = 'Para permitir aos utilizadores pedir um Código EPP através da interface Blesta.';
$lang['OvhDomains.package_fields.tld_options'] = 'TLDs';
