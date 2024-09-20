meData.data_.isDebugEnabled&&console.log("XPay wallet debugging: client error event handler has already been added"):(window.__GLOBAL_CLIENT_ERROR_LISTENER__=!0,Oe=rq,window.addEventListener("error",(e=>{(0,Be.Z)(e?.error)?Le(e.error,{componentStack:""}):window.loadTimeData.data_.isDebugEnabled&&console.log("XPay wallet debugging: errorEvent is not error",e)}))),function(e){const t=e;function a(e,a){if(a.length>0){if("getScriptHash"in a[0].constructor.prototype)return t.prepareStackTrace=Ue,Ue.apply(t,[e,a]);t.prepareStackTrace=Ge}return"function"==typeof Ge?Ge.apply(t,[e,a]):e.stack}t.prepareStackTrace!==a&&t.prepareStackTrace!==Ue&&(Ge=t.prepareStackTrace,t.prepareStackTrace=a)}(Error);const oq=(0,n.Z)((e=>ig("WalletHub_Loading",{accountType:e},!0,!0))),nq=()=>((0,i.useEffect)((()=>{bl(Er.WalletHubFCPGeneral,Math.round(performance.now()));const e=new PerformanceObserver((e=>{e.getEntries().forEach((e=>{e.entryType===iq&&bl(Er.WalletHubLCPGeneral,Math.round(e.startTime))}))}));return e.observe({entryTypes:[iq]}),()=>{e.disconnect()}}),[]),(0,i.useEffect)((()=>{const e=(()=>{er.onPersonalDataChanged.addListener(LY),Uo.onPrefsChanged.addListener(WY),Zt()&&(Ql.onPasswordBreachScanStatusChanged.addListener(GY),Ql.onScannedPasswordsCountChanged.addListener(UY),Ql.onUnScannedPasswordsCountChanged.addListener(VY),Ql.onFilteredPasswordsCountChanged.addListener(QY),Ql.onPasswordExceptionsListChanged.addListener(zY));const e=Gi("profile-info-changed",HY),t=Gi("sync-status-changed",ZY),a=Gi("sync-prefs-changed",YY);let i={},r={};ht&&(i=Gi("passwords-updated",qY),r=Gi("weak-credentials-updated",KY));let o={};kt()&&(o=Gi("reuse-credentials-updated",jY));let n={};bt&&(n=Gi("addresses-updated",JY));let s={};Dt&&(s=Gi("memberships-updated",XY));let l={};Mt&&(l=Gi("tickets-updated",_Y));let d={};Gt()&&(d=Gi("shopping-order-updated",$Y)),document.addEventListener("visibilitychange",tq);const c=Gi("component-event",eq);return()=>{er.onPersonalDataChanged.removeListener(LY),Uo.onPrefsChanged.removeListener(WY),Zt()&&(Ql.onPasswordBreachScanStatusChanged.removeListener(GY),Ql.onScannedPasswordsCountChanged.removeListener(UY),Ql.onUnScannedPasswordsCountChanged.removeListener(VY),Ql.onFilteredPasswordsCountChanged.removeListener(QY),Ql.onPasswordExceptionsListChanged.removeListener(zY)),Ui(e),Ui(t),Ui(a),Ui(i),Ui(r),Ui(o),Ui(n),Ui(s),Ui(l),Ui(d),document.removeEventListener("visibilitychange",tq),Ui(c)}})();return ht&&Gn?.startEdgePasswordStrengthCheck?.(),kt()&&Gn?.startEdgePasswordReuseCheck?.(),Io(),class{static clearServerData(e){No.send("SyncClearServerData",[e])}static onNavigateToSyncSettingsPage(e){No.send("OnNavigateToSyncSettingsPage",[e])}static getSyncStatus(){return Wi("SyncSetupGetSyncStatus")}static restartSync(){No.send("RestartSync")}static sendUpdateSyncPrefs(){No.send("SyncPrefsDispatch")}static setSyncDatatypes(e,t,a){Wi("SyncSetupSetDatatypes",JSON.stringify(e),t,a)}static setSyncEnabled(e){return Wi("SetSyncEnabled",e)}static startSignIn(e="Settings"){No.send("SyncSetupStartSignIn",[e])}static signOut(e){No.send("SyncSetupSignout",[e])}static setSyncBlocked(e){No.send("BlockSync",[e])}static setSyncConsentConfirmed(e,t=null,a=[]){return Wi("SyncConsentConfirmed",e,t,a)}static triggerSyncConsentDialog(){No.send("TriggerSyncConsentDialog")}static setSyncDecryptionPassphrase(e){return Wi("SyncSetupSetDecryptionPassphrase",e)}static setSyncEncryptionPassphrase(e){return Wi("SyncSetupSetEncryptionPassphrase",e)}}.sendUpdateSyncPrefs(),Un("msWalletHubPaymentGiftCard",ve.valueExists(nt.isNewPaymentGiftCardEnabled)||ve.valueExists(nt.isWalletHubPaymentGiftCardEnabled)),()=>{e()}}),[]),(0,i.useEffect)((()=>{var e,t;Ai.dispatch(Ll((e=>{var t;oq(e.accountType),t=e.accountType,us(Sr,aq[t]),(e.accountType===xe.MSA||e.accountType===xe.AAD&&ut())&&(Ai.dispatch(vl()),Yt()&&Ai.dispatch(Fl())),e.accountType===xe.MSA&&(Ai.dispatch(Rl()),Ai.dispatch(xl()),lt()&&Ai.dispatch(Bl()),Ut()&&Ai.dispatch((e=>{e(fo("getGiftCardListStatus",{isProcessing:!0}));const t=st(nt.isNewGiftCardListWithCashbackEnabled)||st(nt.isWalletHubGiftCardListWithCashb}}" class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<# if ( data.attachment && data.attachment.id ) { #>
			<div class="attachment-media-view attachment-media-view-{{ data.attachment.type }} {{ data.attachment.orientation }}">
				<div class="thumbnail thumbnail-{{ data.attachment.type }}">
					<# if ( 'image' === data.attachment.type && data.attachment.sizes && data.attachment.sizes.medium ) { #>
						<img class="attachment-thumb" src="{{ data.attachment.sizes.medium.url }}" draggable="false" alt="" />
					<# } else if ( 'image' === data.attachment.type && data.attachment.sizes && data.attachment.sizes.full ) { #>
						<img class="attachment-thumb" src="{{ data.attachment.sizes.full.url }}" draggable="false" alt="" />
					<# } else if ( 'audio' === data.attachment.type ) { #>
						<# if ( data.attachment.image && data.attachment.image.src && data.attachment.image.src !== data.attachment.icon ) { #>
							<img src="{{ data.attachment.image.src }}" class="thumbnail" draggable="false" alt="" />
						<# } else { #>
							<img src="{{ data.attachment.icon }}" class="attachment-thumb type-icon" draggable="false" alt="" />
						<# } #>
						<p class="attachment-meta attachment-meta-title">&#8220;{{ data.attachment.title }}&#8221;</p>
						<# if ( data.attachment.album || data.attachment.meta.album ) { #>
						<p class="attachment-meta"><em>{{ data.attachment.album || data.attachment.meta.album }}</em></p>
						<# } #>
						<# if ( data.attachment.artist || data.attachment.meta.artist ) { #>
						<p class="attachment-meta">{{ data.attachment.artist || data.attachment.meta.artist }}</p>
						<# } #>
						<audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
							<source type="{{ data.attachment.mime }}" src="{{ data.attachment.url }}" />
						</audio>
					<# } else if ( 'video' === data.attachment.type ) { #>
						<div class="wp-media-wrapper wp-video">
							<video controls="controls" class="wp-video-shortcode" preload="metadata"
								<# if ( data.attachment.image && data.attachment.image.src !== data.attachment.icon ) { #>poster="{{ data.attachment.image.src }}"<# } #>>
								<source type="{{ data.attachment.mime }}" src="{{ data.attachment.url }}" />
							</video>
						</div>
					<# } else { #>
						<img class="attachment-thumb type-icon icon" src="{{ data.attachment.icon }}" draggable="false" alt="" />
						<p class="attachment-title">{{ data.attachment.title }}</p>
					<# } #>
				</div>
				<div class="actions">
					<# if ( data.canUpload ) { #>
					<button type="button" class="button remove-button">{{ data.button_labels.remove }}</button>
					<button type="button" class="button upload-button control-focus" {{{ describedByAttr }}}>{{ data.button_labels.change }}</button>
					<# } #>
				</div>
			</div>
		<# } else { #>
			<div class="attachment-media-view">
				<# if ( data.canUpload ) { #>
					<button type="button" class="upload-button button-add-media" {{{ describedByAttr }}}>{{ data.button_labels.select }}</button>
				<# } #>
				<div class="actions">
					<# if ( data.defaultAttachment ) { #>
						<button type="button" class="button default-button">{{ data.button_labels['default'] }}</button>
					<# } #>
				</div>
			</div>
		<# } #>
		<?php
	}

	/**
	 * Get default button labels.
	 *
	 * Provides an array of the default button labels based on the mime type of the current control.
	 *
	 * @since 4.9.0
	 *
	 * @return string[] An associative array of default button labels keyed by the button name.
	 */
	public function get_default_button_labels() {
		// Get just the mime type and strip the mime subtype if present.
		$mime_type = ! empty( $this->mime_type ) ? strtok( ltrim( $this->mime_type, '/' ), '/' ) : 'default';

		switch ( $mime_type ) {
			case 'video':
				return array(
					'select'       => __( 'Select video' ),
					'change'       => __( 'Change video' ),
					'default'      => __( 'Default' ),
					'remove'       => __( 'Remove' ),
					'placeholder'  => __( 'No video selected' ),
					'frame_title'  => __( 'Select video' ),
					'frame_button' => __( 'Choose video' ),
				);
			case 'audio':
				return array(
					'select'       => __( 'Select audio' ),
					'change'       => __( 'Change audio' ),
					'default'      => __( 'Default' ),
					'remove'       => __( 'Remove' ),
					'placeholder'  => __( 'No audio selected' ),
					'frame_title'  => __( 'Select audio' ),
					'frame_button' => __( 'Choose audio' ),
				);
			case 'image':
				return array(
					'select'       => __( 'Select image' ),
					'site_icon'    => __( 'Select Site Icon' ),
					'change'       => __( 'Change image' ),
					'default'      => __( 'Default' ),
					'remove'       => __( 'Remove' ),
					'placeholder'  => __( 'No image selected' ),
					'frame_title'  => __( 'Select image' ),
					'frame_button' => __( 'Choose image' ),
				);
			default:
				return array(
					'select'       => __( 'Select file' ),
					'change'       => __( 'Change file' ),
					'default'      => __( 'Default' ),
					'remove'       => __( 'Remove' ),
					'placeholder'  => __( 'No file selected' ),
					'frame_title'  => __( 'Select file' ),
					'frame_button' => __( 'Choose file' ),
				);
		} // End switch().
	}
}
