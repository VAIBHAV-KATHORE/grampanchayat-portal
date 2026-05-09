
const language = {
  en:{menu_home:"Home",menu_about:"About",menu_panchayat:"Panchayat",menu_services:"Services",menu_gallery:"Gallery",menu_contact:"Contact",
      title:"Welcome to Mal Sawargaon",tag:"A Village of Culture, Unity & Growth",
      about_text:"Mal Sawargaon is a peaceful village in Maharashtra with rich culture and hardworking people.",
      services_panchayat:"Local governance and citizen services.",services_health:"Primary health support facilities.",services_edu:"Schools and learning support.",
      announcements:"Latest Announcements",gallery:"Gallery Preview"},
  mr:{menu_home:"मुख्यपृष्ठ",menu_about:"आमच्या गावाबद्दल",menu_panchayat:"ग्रामपंचायत",menu_services:"सेवा",menu_gallery:"छायाचित्रे",menu_contact:"संपर्क",
      title:"माळ सावरगाव मध्ये आपले स्वागत आहे",tag:"संस्कृती, एकता आणि प्रगतीचे गाव",
      about_text:"माळ सावरगाव हा शांत, सांस्कृतिक आणि मेहनती लोकांसाठी प्रसिद्ध गाव आहे.",
      services_panchayat:"स्थानिक प्रशासन आणि नागरी सेवा.",services_health:"प्राथमिक आरोग्य सुविधा.",services_edu:"शाळा आणि शिक्षण सहाय्यता.",
      announcements:"ताज्या घोषणाः",gallery:"छायाचित्रे"},
  hi:{menu_home:"मुख्यपृष्ठ",menu_about:"गांव के बारे में",menu_panchayat:"पंचायत",menu_services:"सेवाएँ",menu_gallery:"गैलरी",menu_contact:"संपर्क",
      title:"माल सावरगांव में आपका स्वागत है",tag:"संस्कृति, एकता और प्रगति का गाँव",
      about_text:"माल सावरगांव महाराष्ट्र का शांत और सांस्कृतिक गाँव है.",
      services_panchayat:"स्थानीय प्रशासन और नागरिक सेवाएँ।",services_health:"प्राथमिक स्वास्थ्य सुविधाएँ.",services_edu:"स्कूल और शिक्षा सहायता।",
      announcements:"ताज़ा घोषणाएँ",gallery:"गैलरी पूर्वावलोकन"}
};
function changeLang(lang){
  document.getElementById('title').innerText = language[lang].title;
  document.getElementById('tag').innerText = language[lang].tag;
  document.getElementById('menu_home').innerText = language[lang].menu_home;
  document.getElementById('menu_about').innerText = language[lang].menu_about;
  document.getElementById('menu_panchayat').innerText = language[lang].menu_panchayat;
  document.getElementById('menu_services').innerText = language[lang].menu_services;
  document.getElementById('menu_gallery').innerText = language[lang].menu_gallery;
  document.getElementById('menu_contact').innerText = language[lang].menu_contact;
  let about_text=document.getElementById('about_text'); if(about_text) about_text.innerText=language[lang].about_text;
  let s1=document.getElementById('services_panchayat'); if(s1) s1.innerText=language[lang].services_panchayat;
  let s2=document.getElementById('services_health'); if(s2) s2.innerText=language[lang].services_health;
  let s3=document.getElementById('services_edu'); if(s3) s3.innerText=language[lang].services_edu;
  let announcements=document.getElementById('announcements_title'); if(announcements) announcements.innerText=language[lang].announcements;
  let gallery=document.getElementById('gallery_title'); if(gallery) gallery.innerText=language[lang].gallery;
}
window.onload = ()=>{changeLang('mr');};
