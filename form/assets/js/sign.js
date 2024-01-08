const canvas = document.getElementById("sig-canvas");
const signClear = document.getElementById("sig-clearBtn");
const signSave = document.getElementById("sig-submitBtn");
const sigText = document.getElementById("sig-dataUrl");
const sigImage = document.getElementById("sig-image");

const signaturePad = new SignaturePad(canvas, {
	minWidth: 1,
    maxWidth: 1,
    minDistance:0,
    throttle:1,
    penColor: "rgb(66, 133, 244)"
});

signClear.addEventListener("click", () => {
   signaturePad.clear();
   sigText.value = "";
   sigImage.setAttribute("src", "");
    $(".martop25img").css("display","none");
});

signSave.addEventListener("click", () => {
  if (!signaturePad.isEmpty()) {
  	const dataURL = signaturePad.toDataURL();
    sigText.value = dataURL;
    sigImage.setAttribute("src", dataURL);
    $(".martop25img").css("display","block");
  } 
});




