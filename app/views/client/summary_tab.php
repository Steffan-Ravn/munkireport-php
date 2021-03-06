	<div class="row" style="margin-top: 20px">
		<div class="col-lg-4">
			<div class="row">
				<div class="col-xs-6">
					<img class="img-responsive" src="https://km.support.apple.com.edgekey.net/kb/securedImage.jsp?configcode=<?php echo substr($serial_number, 8); ?>&amp;size=240x240" />
				</div>
				<div class="col-xs-6" style="font-size: 1.4em; overflow: hidden">
					<span class="label label-info">OS X <span class="mr-os_version"></span></span><br>
					<span class="label label-info"><span class="mr-physical_memory"></span> GB</span><br>
					<span class="label label-info"><span class="mr-serial_number"></span></span><br>
					<span class="label label-info"><span class="mr-remote_ip"></span></span><br>
				</div>
			</div>
			<span class="mr-machine_desc"></span>
		</div>
		<div class="col-lg-4">
			<h4 class="mr-computer_name"></h4>
			<table>
				<tr>
					<th data-i18n="last_seen"></th><td class="mr-check-in_date"></td>
				</tr>
				<tr>
					<th data-i18n="uptime"></th><td class="mr-uptime"></td>
				</tr>
				<tr>
					<th data-i18n="business_unit.machine_group"></th><td class="mr-machine_group"></td>
				</tr>
				<tr>
					<th data-i18n="reg_date"></th><td class="mr-reg_date"></td>
				</tr>
			</table>
		</div>

		<div class="col-lg-4">
			<h4><i class="fa fa-hdd-o"></i> <span data-i18n="storage.storage"></span></h4>
			<table>
				<tr>
					<th data-i18n="storage.size"></th><td class="mr-TotalSize"></td>
				</tr>
				<tr>
					<th data-i18n="storage.used"></th><td class="mr-UsedSize"></td>
				</tr>
				<tr>
					<th data-i18n="storage.free"></th><td class="mr-FreeSpace"></td>
				</tr>
				<tr>
					<th data-i18n="storage.smartstatus"></th><td class="mr-SMARTStatus"></td>
				</tr>
			</table>
		</div>

	</div><!-- /row -->

	<div class="row">

		<div class="col-lg-4">
			<h4 data-i18n="hardware.hardware"></h4>
			<table>
				<tr>
					<th data-i18n="serial"></th><td class="mr-serial_number"></td>
				</tr>
				<tr>
					<th data-i18n="cpu.cpu"></th><td class="mr-cpu"></td>
				</tr>
				<tr>
					<th data-i18n="cpu.type"></th><td><span class="mr-number_processors"></span> <span data-i18n="cpu.core"></span></td>
				</tr>
				<tr>
					<th data-i18n="memory.memory"></th><td><span class="mr-physical_memory"></span> GB</td>
				</tr>
				<tr>
					<th data-i18n="hardware.uuid"></th><td class="mr-platform_UUID"></td>
				</tr>
				<tr>
					<th data-i18n="model"></th><td class="mr-machine_model"></td>
				</tr>
			</table>
		</div>

		<div class="col-lg-4">
			<h4 data-i18n="software.software"></h4>
			<table>
				<tr>
					<th data-i18n="os.version"></th><td>OS X <span class="mr-os_version"></span></td>
				</tr>
				<tr>
					<th data-i18n="buildversion"></th><td class="mr-buildversion"></td>
				</tr>
				<tr>
					<th data-i18n="cpu.arch"></th><td class="mr-cpu_arch"></td>
				</tr>
				<tr>
					<th data-i18n="software.smc_version"></th><td><span class="mr-SMC_version_system"></span></td>
				</tr>
				<tr>
					<th data-i18n="software.boot_rom_version"></th><td class="mr-boot_rom_version"></td>
				</tr>
			</table>
		</div>

		<div class="col-lg-4">
			<h4><i class="fa fa-apple"></i> <span data-i18n="ard"></span></h4>
			<table id="ard-data" class="table"></table>
		</div>

	</div><!-- /row -->

	<div class="row">

		<div class="col-lg-4">
			<h4><i class="fa fa-umbrella"></i> <span data-i18n="warranty.warranty"></span></h4>
			<table>
				<tr>
					<th data-i18n="warranty.coverage"></th><td class="mr-warranty_status"></td>
				</tr>
				<tr>
					<th data-i18n="warranty.est_manufacture_date"></th><td class="mr-manufacture_date"></td>
				</tr>
				<tr>
					<th data-i18n="warranty.est_purchase_date"></th><td class="mr-purchase_date"></td>
				</tr>
			</table>
		</div>

		<div class="col-lg-4">
			<h4><i class="fa fa-sitemap"></i> <span data-i18n="network.network"></span></h4>
			<table>
				<tr>
					<th data-i18n="network.remote_ip"></th><td class="mr-remote_ip"></td>
				</tr>
				<tr>
					<th data-i18n="network.hostname"></th><td class="mr-hostname"></td>
				</tr>
				</tr>
			</table>
		</div>

		<div class="col-lg-4">
			<h4><i class="fa fa-users"></i> <span data-i18n="user.users"></span></h4>
			<table>
				<tr>
					<th data-i18n="last_user"></th><td><span class="mr-long_username"></span>
				(<span class="mr-console_user"></span>)</td>
				</tr>
				<tr>
					<th data-i18n="user.local_admins"></th><td class="mr-users"></td>
				</tr>
				</tr>
			</table>
		</div>

	</div><!-- /row -->

	<div class="row">

		<div class="col-lg-4">
			<h4><i class="fa fa-clock-o"></i> <span data-i18n="timemachine.timemachine"></span></h4>
			<table class="mr-timemachine-table">
			</table>
		</div>
		
		<div class="col-lg-4">
			<h4><i class="fa fa-home"></i> <span data-i18n="crashplan.client.title"></span></h4>
			<table class="mr-crashplan-table">
			</table>
		</div>

		<div class="col-lg-4">
			<h4><i class="fa fa-keyboard-o fa-fixed"></i> <span data-i18n="bluetooth.bluetooth"></span></h4>
			<table class="mr-bluetooth-table">
			</table>
		</div>

		<div class="col-lg-4">
			<h4><i class="fa fa-comment-o fa-fixed"></i> <span data-i18n="client.comment"></span></h4>
			<div class="comment" data-section="client"></div>
			</table>
		</div>
		
		<div class="col-lg-4">
			<h4><i class="fa fa-key fa-fixed"></i> <span data-i18n="security.security"></span></h4>
			<table>
				<tr>
					<th data-i18n="security.gatekeeper"></th><td class="mr-gatekeeper"></td>
				</tr>
				<tr>
					<th data-i18n="security.sip"></th><td class="mr-sip"></td>
				</tr>
			</table>
		</div>
		
	</div><!-- /row -->
