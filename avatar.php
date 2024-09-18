
  <?php include ("include/Connection.php");$path='./assets';include ("include/header.php"); ?>
 <style>
     
      
       #main{
            background: url(./assets/img/5.jpg) top center;
            background-size: contain;
        }
      .icon-box .icon{
               width: 220px ! important;
               height: 260px ! important;
               background-color: transparent; /* خلفية شفافة للـ div */
        } 
      .icon-box {
              padding: 20px 10px 0px 10px ! important;
        
        }
       p  .bx {
            font-size: 50px ! important;
        
        }
   .services .icon-box .icon::before {
   background: none ! important;
}

    </style>
  <main id="main" >

     <section id="smart_city" class="services" style="margin-top: 90px;">
      <div class="container">
            <div class="">
              <h1 style="color: var(--bs-gray-400);font-weight: 600;"> CHOOSE AVATAR Enter The City</h1>
              </div>
        <div class="row">                
         
      

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon" id="viewer3"style="  background: url(./assets/img/Avatar.png1) top center;background-size: cover;"></div>
              <h4><a href="">ANNA</a></h4>
              <p><i class="bx bx-chevron-down"></i></p>
            </div>
          </div>
             

        </div>

      </div>
   </section><!-- End courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include ("include/footer.php");?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>



<script>
    // دالة لتحميل وعرض ملف .glb في div معين
    function loadGLB(viewerId, modelPath) {
        const viewer = document.getElementById(viewerId);

        // إعداد المشهد
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, viewer.clientWidth / viewer.clientHeight, 0.1, 1000);
        
        // إعداد renderer مع تمكين الشفافية
        const renderer = new THREE.WebGLRenderer({ alpha: true }); // تمكين الشفافية
        renderer.setSize(viewer.clientWidth, viewer.clientHeight);
        viewer.appendChild(renderer.domElement);

        // إضاءة
        const light = new THREE.DirectionalLight(0xffffff, 1);
        light.position.set(1, 1, 1).normalize();
        scene.add(light);

        const ambientLight = new THREE.AmbientLight(0xffffff, 2); // إضاءة محيطة
        scene.add(ambientLight);

        // تحميل ملف .glb
        const loader = new THREE.GLTFLoader();
        loader.load(modelPath, function (gltf) {
            const model = gltf.scene;
            scene.add(model);

            // تعديل حجم المجسم
            model.scale.set(5, 5, 5); // يتم التكبير إلى الضعف. (قم بتغيير القيمة لتكبير أو تصغير)

            // اختياري: تدوير المجسم
            model.rotation.y = Math.PI / 2;

            // تحريك المشهد مع تدوير المجسم
            const animate = function () {
                requestAnimationFrame(animate);
                model.rotation.y += 0.01; // تدوير ببطء
                renderer.render(scene, camera);
            };
            animate();
        });

        // ضبط موقع الكاميرا
        camera.position.set(0, 5, 6);

        // تعديل العرض عند تغيير حجم الـ div
        window.addEventListener('resize', () => {
            const width = viewer.clientWidth;
            const height = viewer.clientHeight;
            renderer.setSize(width, height);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
        });
    }


    loadGLB('viewer3', './assets/img/66e1d689ef34841f967937d2.glb');

</script>