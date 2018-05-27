## product
Web programlama Product modülüdür.

Frontend sayfasına ulaşmak için url   .../product/products şeklinde
Backend sayfasına ulaşmak için url    ...admin/product/products şeklinde girilmelidir.

# kurulum
product modülü portal uygulamasına bağlıdır bu yüzden https://github.com/kouosl/portal adresinden portalın kurulduğundan emin olduktan sonra portal dosyasındaki composer.json dosyasında 

    "repositories" bölümüne
    
    '{
	 		"type": "vcs",
	 	  "url": "https://github.com/YusufTurker/product.git"
	  }'
	  
	  "require" bölümüne
	  '"kouosl/product": "dev-master",'
   
   eklenmelidir.Bu kodlar sayesinde composer modülümüzü gerekli olarak görüp bileşenleri dosyaya ekleyecektir.
   
   İkinci adımda portal/backend/config/main.php ve portal/frontend/config/main.php dosyalarında
   'modules' bölümüne 
   
    'product' => [
			'class' => 'kouosl\product\Module'
			],
  eklenmelidir.
      Bu adımlardan sonra portal klasöründe komut satırını açarak 
      
      "composer update" 
      
   komutu yazılır ve modülümüz portal dosyasına yüklenir. 
   
# Modül amacı
   Kullanıcıların giriş yaptıktan sonra ürün ekleme,silme,düzenleme,arama gibi işlemleri yapması amaçlanmıştır.
