<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models', '/next/path/to/models'),
 *     'Model/Behavior'            => array('/path/to/behaviors', '/next/path/to/behaviors'),
 *     'Model/Datasource'          => array('/path/to/datasources', '/next/path/to/datasources'),
 *     'Model/Datasource/Database' => array('/path/to/databases', '/next/path/to/database'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions', '/next/path/to/sessions'),
 *     'Controller'                => array('/path/to/controllers', '/next/path/to/controllers'),
 *     'Controller/Component'      => array('/path/to/components', '/next/path/to/components'),
 *     'Controller/Component/Auth' => array('/path/to/auths', '/next/path/to/auths'),
 *     'Controller/Component/Acl'  => array('/path/to/acls', '/next/path/to/acls'),
 *     'View'                      => array('/path/to/views', '/next/path/to/views'),
 *     'View/Helper'               => array('/path/to/helpers', '/next/path/to/helpers'),
 *     'Console'                   => array('/path/to/consoles', '/next/path/to/consoles'),
 *     'Console/Command'           => array('/path/to/commands', '/next/path/to/commands'),
 *     'Console/Command/Task'      => array('/path/to/tasks', '/next/path/to/tasks'),
 *     'Lib'                       => array('/path/to/libs', '/next/path/to/libs'),
 *     'Locale'                    => array('/path/to/locales', '/next/path/to/locales'),
 *     'Vendor'                    => array('/path/to/vendors', '/next/path/to/vendors'),
 *     'Plugin'                    => array('/path/to/plugins', '/next/path/to/plugins'),
 * ));
 *
 */

/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the Inflector functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */

/**
 * You can attach event listeners to the request lifecycle as Dispatcher Filter . By Default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 *		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 *		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callable' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 *		array('callable' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'FileLog',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));
CakeLog::config('error', array(
	'engine' => 'FileLog',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));

Inflector::rules('singular', array(
	'uninflected' => array('bimbo')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('bimbo')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('barang')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('barang')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('bayar_bon')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('bayar_bon')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_bon')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_bon')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_nota_bawa')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_nota_bawa')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_nota_retur')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_nota_retur')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_nota_tunai')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_nota_tunai')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_order')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_order')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_pembelian')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_pembelian')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_rencana_beli')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_rencana_beli')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_retur_beli')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_retur_beli')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_stock_opname')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_stock_opname')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_transfer')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_transfer')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('d_transfer_kembali')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('d_transfer_kembali')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('department')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('department')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('diskon')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('diskon')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('karyawan')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('karyawan')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('kedalaman_produk')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('kedalaman_produk')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('komisi')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('komisi')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('logs_amigo')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('logs_amigo')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('lokasi')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('lokasi')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('lokasi_barang')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('lokasi_barang')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_bon')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_bon')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_nota_bawa')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_nota_bawa')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_nota_retur')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_nota_retur')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_nota_tunai')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_nota_tunai')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_order')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_order')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_pembelian')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_pembelian')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_rencana_beli')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_rencana_beli')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_retur_beli')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_retur_beli')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_stock_opname')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_stock_opname')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_transfer')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_transfer')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('m_transfer_kembali')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('m_transfer_kembali')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('merk')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('merk')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('no_barang')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('no_barang')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('nomor_urut')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('nomor_urut')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('pelanggan')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('pelanggan')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('retur_bon_lama')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('retur_bon_lama')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('setup')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('setup')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('setuppromo')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('setuppromo')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('strip')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('strip')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('sub_kategori')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('sub_kategori')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('supp_barang')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('supp_barang')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('supplier')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('supplier')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tabelbenik')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tabelbenik')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tabelbonus')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tabelbonus')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tabelthiwul')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tabelthiwul')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tbl_lmbrnota')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tbl_lmbrnota')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('temp_no_nota')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('temp_no_nota')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('temp_order')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('temp_order')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tempak7')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tempak7')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tempak7rinci')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tempak7rinci')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tempanik')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tempanik')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tempdwi')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tempdwi')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tempirawati')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tempirawati')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tempndari')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tempndari')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tempstockopname')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tempstockopname')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tlaporan1')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tlaporan1')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tlaporan2')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tlaporan2')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tlaporan3')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tlaporan3')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tlaporan4')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tlaporan4')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tlaporan5')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tlaporan5')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('tro')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('tro')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('vdetailretur')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('vdetailretur')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('vdetailtransfer')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('vdetailtransfer')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('vlap')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('vlap')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('vlaporan')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('vlaporan')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('vlaporan1')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('vlaporan1')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('vlaporan2')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('vlaporan2')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('vlaporan3')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('vlaporan3')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('mddb')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('mddb')
	)
);
Inflector::rules('singular', array(
	'uninflected' => array('waktusyncakhir')
	)
);
Inflector::rules('plural', array(
	'uninflected' => array('waktusyncakhir')
	)
);