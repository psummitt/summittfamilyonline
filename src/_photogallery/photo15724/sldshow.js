var leftdisabled = true;
var rightdisabled = true;

function fp_ie4() {
	var nav = navigator.appVersion.indexOf("MSIE");
	return (nav>0) && (parseInt(navigator.appVersion.substring(nav+5, nav+6)) >= 4);

}

function fp_ShowImg(src, sWidth, sHeight, sID, iIndex)
{	
	var el = document.images["fpGalleryMainImg_" + sID];
	if (el) {
		if(fp_ie4()) {
			el.style.visiblity = "hidden";
			el.src = src.lowsrc;
			el.width = sWidth;
			el.height = sHeight;
				
			var caption = document.all["fpGalleryCaptions_" + sID].all.tags("div")
			var sCaptionTxt;
			var sCaptionHTML;
			
			if (caption && caption[iIndex]) {
				sCaptionTxt = caption[iIndex].innerText
				sCaptionHTML = caption[iIndex].innerHTML
			} else {
				sCaptionTxt = "";
				sCaptionHTML = "";
			}
			
			el.title = sCaptionTxt;
			el.style.visiblity = "visible";
			
			var el = document.all["fpGalleryCaptionCell_" + sID];
			if (el) {
				el.innerHTML = sCaptionHTML;
			}
			
			var el = document.all["fpGalleryDescCell_" + sID];
			if (el) {
				var sDesc = document.all["fpGalleryDescriptions_" + sID].all.tags("div")
				el.innerHTML = sDesc && sDesc[iIndex]?sDesc[iIndex].innerHTML:"";
			}
		} else {
			el.src = src.lowsrc
		}
	}
}

function fp_ScrollLeft(sID) {
	var el = document.all["fpGalleryListCell_" + sID];
	if (el && fp_ie4()) {
		var coll = el.children.tags("A");
		if (coll) {
			for (i=1;i<coll.length;i++) {
				if (coll(i).style.display != "none") {
					coll(i-1).style.display = "inline";
					break;	
				}
			}
			
			if ((el.scrollWidth - 5) >= el.clientWidth) {
				var btn = document.all["fpGalleryRightBtn_" + sID]
				if (btn && rightdisabled) {
					rightdisabled = false;
					te = btn.src
					btn.src = btn.lowsrc
					btn.lowsrc = te
				}
			}
			
			if (coll(0).style.display != "none") {
				var btn = document.all["fpGalleryLeftBtn_" + sID]
				if (btn && !leftdisabled) {
					leftdisabled = true;
					te = btn.src
					btn.src = btn.lowsrc
					btn.lowsrc = te
				}
			}
		}
		
	}
}

function fp_ScrollRight(sID) {
	var el = document.all["fpGalleryListCell_" + sID];
	if (el && fp_ie4()) {
		if ((el.scrollWidth - 5) <= el.clientWidth) {
			var btn = document.all["fpGalleryRightBtn_" + sID];
			if (btn && !rightdisabled) {
				rightdisabled = true
				te = btn.src
				btn.src = btn.lowsrc
				btn.lowsrc = te
			}
		} else {
			var coll = el.children.tags("A");
			if (coll) {
				for (i=0;i<coll.length;i++) {
					if (coll(i).style.display != "none") {
						coll(i).style.display = "none";	
						break;
					}
				}
			}
		
			var btn = document.all["fpGalleryLeftBtn_" + sID];
			if (btn && leftdisabled) {
				te = btn.src
				btn.src = btn.lowsrc
				btn.lowsrc = te
				leftdisabled = false
			}
		}		
	}
}
