let pageLoading;function loader(){pageLoading=setTimeout(showPage,1500)}
function showPage(){document.getElementById("load").style.display="none";document.getElementById("blockPage").style.display="block";document.getElementById("burger").addEventListener("click",openNav);document.getElementById("dropbtn").addEventListener("click",dropdownMenu);document.getElementById("dropbtnBuySell").addEventListener("click",dropdownMenuBuySell);document.getElementById("dropbtnContact").addEventListener("click",dropdownMenuContact);document.getElementById("dropbtnFollow").addEventListener("click",dropdownMenuFollow);document.getElementById("dropbtnLegal").addEventListener("click",dropdownMenuLegal);if(document.getElementById("searchLogo")){document.getElementById("searchLogo").addEventListener("click",searchMobile);document.getElementById("searchLogo").addEventListener("focusout",searchMobileReturn)}else if(document.getElementById("searchLogoPages")){document.getElementById("searchLogoPages").addEventListener("click",searchMobile);document.getElementById("searchLogoPages").addEventListener("focusout",searchMobileReturn)}
if(document.getElementById("sb_instagram")){document.getElementById("sb_instagram").classList.add("row");document.getElementById("sb_instagram").classList.remove("sbi_width_resp");let insta=document.getElementsByClassName('sbi_photo_wrap');insta[0].classList.add("watchImg");insta[0].classList.add("lazy")}}