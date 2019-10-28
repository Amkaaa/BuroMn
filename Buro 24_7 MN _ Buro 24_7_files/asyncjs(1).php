

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="/F9CD80F3-B79B-49AB-AD16-6F61BFFFC81B/netdefender/alert/images/bdicon.ico" type="image/x-icon" />
    <title>Web Protection by Bitdefender</title>
    <link rel="stylesheet" href="/F9CD80F3-B79B-49AB-AD16-6F61BFFFC81B/netdefender/alert/css/tl_style.css" type="text/css" media="all" charset="utf-8" />
</head>

<body>

    <div class="threat-blocked-view">

        <div class="threat-blocked-container">
            <div class="threat-blocked">
                <div class="header">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                            <path fill="#d0021b" d="M31.69,32.44H26V42.2h5.46c3,0,7.28-.52,7.28-5C38.74,33.68,36.48,32.44,31.69,32.44Z" />
                            <path fill="#d0021b" d="M53.91,0H6.09A6.09,6.09,0,0,0,0,6.08V53.92A6.09,6.09,0,0,0,6.09,60H53.91A6.09,6.09,0,0,0,60,53.92V6.08A6.09,6.09,0,0,0,53.91,0ZM32.09,47.46l-10.86,0V18.79c0-1.55-1.45-1.75-3.51-3.46L16,13.87v-.54H33.08c5,0,10.19,2.36,10.19,8.58,0,3.86-2.3,6.4-5.75,7.46v.1a8.07,8.07,0,0,1,7.22,8.25C44.74,45.16,38.41,47.46,32.09,47.46Z" />
                            <path fill="#d0021b" d="M36.22,25.76a3.79,3.79,0,0,0,1.15-2.82A3.9,3.9,0,0,0,36.26,20c-1-1-2-1.43-5.35-1.43H26v8.59h5.42C33.89,27.18,35.24,26.71,36.22,25.76Z" />
                        </svg>
                    </div>

                    <h1>
                        <span>Web Protection by </span>Bitdefender
                    </h1>

                </div>

                <div id="byEE_4198de9e5a25f6595bc85793d522328a_id_alert_content">
                    <div class="body">
                        <h2>Suspicious page blocked for your protection</h2>
                        <span class="muted" id="byEE_4198de9e5a25f6595bc85793d522328a_id_url"></span>
                        <!-- cert.wronghost --><p>Your connection to this web page is not safe due to an unmatching security certificate.<br>This means that the certificate was issued for a different web address than the one it is being used for, and you run the risk of exposing your data by accessing this page.</p>
                    </div>

                    <div class="footer">
                        <button class="primary-btn" id="byEE_4198de9e5a25f6595bc85793d522328a_id_goToHomePage">Take me back to safety</button>
                        <a href="" class="link-btn" id="byEE_4198de9e5a25f6595bc85793d522328a_id_proceedAnyway">I understand the risks, take me there anyway</a>
                        <div id="byEE_4198de9e5a25f6595bc85793d522328a_id_whitelist">
    <span class="small muted">If you know this page is not dangerous, you can <a href="" id="byEE_4198de9e5a25f6595bc85793d522328a_id_add2whitelist">add it to your Exceptions list</a> of trusted websites. Be aware that you will not be warned about any threats existing on this page.</span>
</div>

                    </div>
                </div>
                
            </div>

        </div>

    </div>


<script id="byEE_4198de9e5a25f6595bc85793d522328a_script" type="text/javascript">
    var byEE_4198de9e5a25f6595bc85793d522328a_TIMEOUT = 1000;
    var byEE_4198de9e5a25f6595bc85793d522328a_timeoutID = -1;
    var byEE_4198de9e5a25f6595bc85793d522328a_action;
    var byEE_4198de9e5a25f6595bc85793d522328a_haspassword=false;

	(function (undefined) {
	
		function encodeString(str) {
			var temp = [];
			var length = str.length;
			for (var i = 0; i < length; i++) {
				//obtain character code
				var code = str.charCodeAt(i);
				if (code >= 0xD800 && code <=0xDBFF) {
					var high = code;
					var low = str.charCodeAt(i+1);
					if (isNaN(low)) {
						//We hit the end of the string. Just skip this last character
						continue;
					}
					code = (high - 0xD800) * 0x400 + (low - 0xDC00) + 0x10000;
				}
			
				temp.push(["&#", code, ";"].join(''));
			}
			return temp.join('');
		}
	
		function byEE_4198de9e5a25f6595bc85793d522328a_goToHomePage() {
			if (typeof window.home == 'function') {
				window.home();
			} else { // For IE
				window.location = 'about:blank';
			}
		}

		function byEE_4198de9e5a25f6595bc85793d522328a_showpassword(show) {
		    if (show) {
		        document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_alert_content").style.display = "none";
		        document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_password_error").style.display = "none";
		        document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_password_content").style.display = "block";
		        document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_password").value = "";
		        byEE_4198de9e5a25f6595bc85793d522328a_haspassword=true;
		    } else {
		        document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_alert_content").style.display = "block";
		        var elem = document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_password_content");
		        if (elem) {
		            elem.style.display = "none";
		        }
		        byEE_4198de9e5a25f6595bc85793d522328a_haspassword=false;
		    }
		}

		function byEE_4198de9e5a25f6595bc85793d522328a_proceed() {
		    var obj_ajax = null;
		    (window.ActiveXObject) ? obj_ajax = new ActiveXObject("Microsoft.XMLHTTP") : obj_ajax = new XMLHttpRequest();
		    if (obj_ajax) {
		        obj_ajax.onreadystatechange = function () {
		            if ((obj_ajax.readyState == 4) && (obj_ajax.status == 200)) {
		                if (byEE_4198de9e5a25f6595bc85793d522328a_timeoutID != -1) {
                            clearTimeout(byEE_4198de9e5a25f6595bc85793d522328a_timeoutID);
		                    byEE_4198de9e5a25f6595bc85793d522328a_timeoutID = -1;
		                }
		                var response = obj_ajax.getResponseHeader("BDWL_D0D57627257747A3B2EE8E4C3B86CBA3");
		                if (response == "1") { // create
		                    byEE_4198de9e5a25f6595bc85793d522328a_showpassword(false);
		                    byEE_4198de9e5a25f6595bc85793d522328a_timeoutID = setTimeout(byEE_4198de9e5a25f6595bc85793d522328a_proceed, byEE_4198de9e5a25f6595bc85793d522328a_TIMEOUT);
		                } else if (response == "2") { // pending
		                    byEE_4198de9e5a25f6595bc85793d522328a_timeoutID = setTimeout(byEE_4198de9e5a25f6595bc85793d522328a_proceed, byEE_4198de9e5a25f6595bc85793d522328a_TIMEOUT);
		                } else if (response == "3") { // yes
		                    window.location.reload();
		                } else if (response == "4") { // no
		                    byEE_4198de9e5a25f6595bc85793d522328a_showpassword(false);
		                } else if (response == "5") { // has-password
		                    byEE_4198de9e5a25f6595bc85793d522328a_showpassword(true);
		                } else if (response == "6") { // request-password
		                    byEE_4198de9e5a25f6595bc85793d522328a_showpassword(true);
		                } else if (response == "7") { // password-error
		                    var epe = document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_password_error");
		                    if (epe) {
		                        epe.style.display = "block"; }
		                } else if (response == "8") { // password-expired
		                    byEE_4198de9e5a25f6595bc85793d522328a_showpassword(false);
		                    var epa = document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_proceedAnyway");
		                    if (epa) {
		                        epa.style.display = "none"; }
		                    var ewl = document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_whitelist");
		                    if (ewl) {
		                        ewl.style.display = "none"; }
		                } else if (response == "9") { // obk
		                    window.location.reload();
		                } 
		            }
		        }

		        var params = encodeURIComponent(window.location);
		        sid = "" + Math.random();
		        obj_ajax.open("POST", sid, true);
		        obj_ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		        obj_ajax.setRequestHeader("BDNDSS_B67EA559F21B487F861FDA8A44F01C50", "NDSECK_0d6bcf58148a1ac2315a739f23302815");
		        obj_ajax.setRequestHeader("BDNDCA_BBACF84D61A04F9AA66019A14B035478", "NDCA_0d6bcf58148a1ac2315a739f23302815");
		        obj_ajax.setRequestHeader("BDNDTK_BTS86RE4PDHKKZYVUJE2UCM87SLSUGYF", "aa5bdb1847224a0fbee72e046e30141eda2ab8a3598027d27dfdf90c6129ae63");
		        obj_ajax.setRequestHeader("BDWL_D0D57627257747A3B2EE8E4C3B86CBA3", "4198de9e5a25f6595bc85793d522328a");
		        obj_ajax.setRequestHeader("BDPID_A381AA0A15254C36A72B115329559BEB", "17068");
		        obj_ajax.setRequestHeader("BDNDWB_5056E556833D49C1AF4085CB254FC242", byEE_4198de9e5a25f6595bc85793d522328a_action);
		        if (byEE_4198de9e5a25f6595bc85793d522328a_haspassword) {
                    obj_ajax.setRequestHeader("BDPWD_B030436C9F234E61BBECEDA8AC84FB1E", document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_password").value);
                }
		        obj_ajax.send(params);
		    }
		}

        function byEE_4198de9e5a25f6595bc85793d522328a_password_btnOk() {
            var p = document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_password").value;
            if (!p) {
                return; }
            byEE_4198de9e5a25f6595bc85793d522328a_proceed();
        }

        function byEE_4198de9e5a25f6595bc85793d522328a_password_btnCancel() {
            byEE_4198de9e5a25f6595bc85793d522328a_showpassword(false);
        }

		function setUrl() {
		    var elem = document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_id_url");
		    if (elem) {
		        elem.innerHTML = encodeString(window.location.href);
		    }
		}

		function setupClickListener(id, callback) {
			var elem = document.getElementById(id);
			//Disable click functions
			if (elem) {
				elem.addEventListener("click", function(event) {
					event.preventDefault();
					event.stopPropagation();
					if (event.isTrusted) {
						callback(event);
					}
				});
			}
		}
		
		function setupSubmitListener(id, callback) {
			var elem = document.getElementById(id);
			if (elem) {
				elem.addEventListener("submit", function(event) {
					event.preventDefault();
					event.stopPropagation();
					if (event.isTrusted) {
						callback(event);
					}
				});
			}
		}

		setUrl();

		setupClickListener("byEE_4198de9e5a25f6595bc85793d522328a_id_goToHomePage", function(){
			byEE_4198de9e5a25f6595bc85793d522328a_goToHomePage();
			return false;
		});

		setupClickListener("byEE_4198de9e5a25f6595bc85793d522328a_id_proceedAnyway", function(){
		    byEE_4198de9e5a25f6595bc85793d522328a_action = "cl.proceedanyway"; 
		    byEE_4198de9e5a25f6595bc85793d522328a_proceed();
			return false;
		});

		setupClickListener("byEE_4198de9e5a25f6595bc85793d522328a_id_add2whitelist", function(){
		    byEE_4198de9e5a25f6595bc85793d522328a_action = "add2whitelist";
		    byEE_4198de9e5a25f6595bc85793d522328a_proceed();
			return false;
		});

		setupClickListener("byEE_4198de9e5a25f6595bc85793d522328a_id_password_goToHomePage", function(){
		    byEE_4198de9e5a25f6595bc85793d522328a_goToHomePage();
		    return false;
		});

		setupClickListener("byEE_4198de9e5a25f6595bc85793d522328a_id_password_btnOk", function(){
		    byEE_4198de9e5a25f6595bc85793d522328a_password_btnOk();
		    return false;
		});
		
		setupSubmitListener("byEE_4198de9e5a25f6595bc85793d522328a_id_password_form", function(){
		    byEE_4198de9e5a25f6595bc85793d522328a_password_btnOk();
		    return false;
		});

		setupClickListener("byEE_4198de9e5a25f6595bc85793d522328a_id_password_btnCancel", function(){
		    byEE_4198de9e5a25f6595bc85793d522328a_password_btnCancel();
		    return false;
		});
		
		

		var script_elem = document.getElementById("byEE_4198de9e5a25f6595bc85793d522328a_script");
		script_elem.parentNode.removeChild(script_elem);
	})();

</script>
</body>
</html>