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

$paypal = array(
		'CHARSET' => 'UTF-8',
		'PaypalSetup' => 'Configuració mòdul PayPal',
		'PaypalDesc' => 'Aquest mòdul ofereix una pàgina de pagament a través del proveïdor <a href="http://www.paypal.com" target="_blank">Paypal</a> per realitzar qualsevol pagament o un pagament en relació amb un objecte Dolibarr (factures, comandes ...)',
		'PaypalOrCBDoPayment' => 'Continuar el pagament mitjançant targeta o Paypal',
		'PaypalDoPayment' => 'Continuar el pagament mitjançant Paypal',
		'PaypalCBDoPayment' => 'Continuar el pagament mitjançant targeta',
		'PAYPAL_API_SANDBOX' => 'Mode de proves(sandbox)',
		'PAYPAL_API_USER' => 'Nom usuari API',
		'PAYPAL_API_PASSWORD' => 'Contrasenya usuari API',
		'PAYPAL_API_SIGNATURE' => 'Signatura API',
		'PAYPAL_API_INTEGRAL_OR_PAYPALONLY' => 'Proposar pagament integral (Targeta+Paypal) o només Paypal',
		'PAYPAL_CSS_URL' => 'Url opcional del full d\'estil CSS de la pàgina de pagament',
		'ThisIsTransactionId' => 'Identificador de la transacció: <b>%s</b>',
		'PAYPAL_ADD_PAYMENT_URL' => 'Afegir la url del pagament Paypal en enviar un document per e-mail',
		'PAYPAL_IPN_MAIL_ADDRESS' => 'Adreça e-mail per les notificacions instantànies de pagament (IPN)',
		'PredefinedMailContentLink' => 'Podeu fer clic a l\'enllaç assegurança de sota per realitzar el seu pagament a través de PayPal\n\n%s\n\n',
		'YouAreCurrentlyInSandboxMode' => 'Actualment es troba en mode "sandbox"',
);
?>