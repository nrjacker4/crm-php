<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$contracts = array(
		'CHARSET' => 'UTF-8',
		'ContractsArea' => 'Vertragsübersicht',
		'ListOfContracts' => 'Liste der Verträge',
		'LastContracts' => '%s zuletzt geänderte Verträge',
		'AllContracts' => 'Alle Verträge',
		'ContractCard' => 'Vertragskarte',
		'ContractStatus' => 'Vertragsstatus',
		'ContractStatusNotRunning' => 'Läuft nicht',
		'ContractStatusRunning' => 'Läuft',
		'ContractStatusDraft' => 'Entwurf',
		'ContractStatusValidated' => 'Freigegeben',
		'ContractStatusClosed' => 'Geschlossen',
		'ServiceStatusInitial' => 'Nicht ausgeführt',
		'ServiceStatusRunning' => 'Läuft',
		'ServiceStatusLate' => 'Läuft (abgelaufen)',
		'ServiceStatusClosed' => 'Geschlossen',
		'ServicesLegend' => 'Services Legende',
		'Contracts' => 'Verträge',
		'Contract' => 'Vertrag',
		'NoContracts' => 'Keine Verträge',
		'MenuServices' => 'Services',
		'MenuInactiveServices' => 'Inaktive Services',
		'MenuRunningServices' => 'Aktive Services',
		'MenuExpiredServices' => 'Abgelaufene Services',
		'MenuClosedServices' => 'Geschlossene Services',
		'NewContract' => 'Neuer Vertrag',
		'AddContract' => 'Vertrag hinzufügen',
		'SearchAContract' => 'Suche einen Vertra',
		'DeleteAContract' => 'Löschen eines Vertrages',
		'CloseAContract' => 'Schließen eines Vertrages',
		'ConfirmDeleteAContract' => 'Möchten Sie diesen Vertrag und alle verbundenen Services wirklich löschen?',
		'ConfirmValidateContract' => 'Möchten Sie diesen Vertrag wirklich freigeben?',
		'ConfirmCloseContract' => 'Dies schließt auch alle verbundenen Services (aktiv oder nicht). Möchten Sie den Vertrag dennoch schließen?',
		'ConfirmCloseService' => 'Möchten Sie dieses Service wirklich mit Datum <b>%s</b> schließen?',
		'ValidateAContract' => 'Einen Vertrag freigeben',
		'ActivateService' => 'Service aktivieren',
		'ConfirmActivateService' => 'Möchten Sie diesen Service wirklich mit Datum <b>%s</b> aktivieren?',
		'DateContract' => 'Vertragsdatum',
		'DateServiceActivate' => 'Service-Aktivierungsdatum',
		'DateServiceUnactivate' => 'Service-Deaktivierungsdatum',
		'DateServiceStart' => 'Service-Beginndatum',
		'DateServiceEnd' => 'Service-Enddatum',
		'ShowContract' => 'Zeige Vertrag',
		'ListOfServices' => 'Liste der Services',
		'ListOfRunningContractsLines' => 'Liste der aktiven Vertragspositionen',
		'ListOfRunningServices' => 'Liste aktiver Services',
		'NotActivatedServices' => 'Inaktive Services (in freigegebenen Verträgen)',
		'BoardNotActivatedServices' => 'Zu aktivierende Services (in freigegebenen Verträgen)',
		'LastContracts' => '%s neueste Verträge',
		'LastActivatedServices' => '%s zuletzt aktivierte Services',
		'LastModifiedServices' => '%s zuletzt bearbeitete Services',
		'EditServiceLine' => 'Service-Position bearbeiten',
		'ContractStartDate' => 'Vertragsbeginn',
		'ContractEndDate' => 'Vertragsende',
		'DateStartPlanned' => 'Geplanter Beginn',
		'DateStartPlannedShort' => 'Beginn',
		'DateEndPlanned' => 'Geplantes Ende',
		'DateEndPlannedShort' => 'Ende',
		'DateStartReal' => 'Effektiver Beginn',
		'DateStartRealShort' => 'Beginn eff.',
		'DateEndReal' => 'Effektives Ende',
		'DateEndRealShort' => 'Ende eff.',
		'NbOfServices' => 'Anzahl der Services',
		'CloseService' => 'Service schließen',
		'ServicesNomberShort' => '%s Service(s)',
		'RunningServices' => 'Laufende Services',
		'BoardRunningServices' => 'Abgelaufene, aktive Services',
		'ServiceStatus' => 'Service-Status',
		'DraftContracts' => 'Vertragsentwürfe',
		'CloseRefusedBecauseOneServiceActive' => 'Schließen nicht möglich, es existieren noch aktive Services',
		'CloseAllContracts' => 'Alle Verträge schließen',
		'MoveToAnotherContract' => 'In einen anderen Vertrag verschieben',
		'ConfirmMoveToAnotherContract' => 'Haben Sie einen neuen Vertrag für das Verschieben gewählt und möchten Sie diesen Vorgang jetzt durchführen.',
		'ConfirmMoveToAnotherContractQuestion' => 'Bitte wählen Sie einen bestehenden Vertrag (desselben Partners) für die Verschiebung des Services:',
		'TypeContact_contrat_internal_SALESREPSIGN' => 'Vertragsunterzeichnung durch Vertreter',
		'TypeContact_contrat_internal_SALESREPFOLL' => 'Vertragsnachverfolgung durch Vertreter',
		'TypeContact_contrat_external_BILLING' => 'Rechnungskontakt des Kunden',
		'TypeContact_contrat_external_CUSTOMER' => 'Nachverfolgung durch Kundenkontakt',
		'TypeContact_contrat_external_SALESREPSIGN' => 'Vertragsunterzeichnung durch Kundenkontakt',
		'ServiceStatusNotLate' => 'Läuft (nicht abgelaufen)',
		'ServiceStatusNotLateShort' => 'Läuft',
		'ServiceStatusLateShort' => 'Abgelaufen',
		'ListOfInactiveServices' => 'Liste inaktiver Services',
		'ListOfExpiredServices' => 'Liste abgelaufener Services',
		'ListOfClosedServices' => 'Liste geschlossener Services',
		'DeleteContractLine' => 'Lösche Vertragsposition',
		'ConfirmDeleteContractLine' => 'Möchten Sie diese Vertragsposition wirklich löschen?',
		'PaymentRenewContractId' => 'Erneuere Vertragsposition (Nummer %s)',
		'ExpiredSince' => 'Abgelaufen seit',
		'RelatedContracts' => 'Verknüpfte Verträge',
		'Error_CONTRACT_ADDON_NotDefined' => 'Constant CONTRACT_ADDON nicht definiert',
);
?>