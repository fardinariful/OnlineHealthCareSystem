<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Services </title>
        <link re l = "sylesheet" href = "style.css">
    </head>
    <body>
    <section class="services" id="services">

<h1 class="heading">our services</h1>

<div class="box-container container">

   <div class="box">
      <img src="su.jpg" alt="">
      <h3>Surgery specialist</h3>
      <p>A surgeon does surgery. A general surgeon mainly operates on the abdomen or the chest. There are specialties, such as cardiothoracic surgery, neurosurgery, plastic surgery and vascular surgery.</p>
   </div>

   <div class="box">
      <img src="g.jpg" alt="">
      <h3>Gynae specialist</h3>
      <p>A Gynecologist who is an expert in the study of the female reproductive system and specializes in diseases related to female reproductive health.</p>
   </div>

   <div class="box">
      <img src="m.jpg" alt="">
      <h3>Medicine specialist</h3>
      <p>Medicine specialist is the branch of medicine that involves the medical care.</p>
   </div>

   <div class="box">
      <img src="e.jpg" alt="">
      <h3>Emergency</h3>
      <p>Emergency is the gateway to the hospital, patients with pain and agony, relative emotionally charged enter the emergency department at any hour of the day or night, expecting immediate treatment and solace.</p>
   </div>

   <div class="box">
      <img src="o.jpg" alt="">
      <h3>Orthopedic specialist</h3>
      <p>An orthopedic specialist is a physician who specializes in orthopedics. This might include taking or reviewing x-rays and completing a number of tests to best assess your overall health. Orthopedic injuries might include back and neck pain, sports related injuries, or issues such as carpal tunnel.</p>
   </div>

   <div class="box">
      <img src="d.jpg" alt="">
      <h3>Dentist</h3>
      <p>A dentist, also known as a dental surgeon, is a health care professional who specializes in dentistry (the diagnosis, prevention, management, and treatment of diseases and conditions of the oral cavity and other aspects of the craniofacial complex including the temporomandibular joint).</p>
   </div>
   <div class="box">
      <img src="eye.jpg" alt="">
      <h3>Ophthalmologist</h3>
      <p>Ophthalmologists prescribe medications to treat eye diseases, implement laser therapy, and perform surgery when needed.Ophthalmologists provide both primary and specialty eye care - medical and surgical.</p>
   </div>
   <div class="box">
      <img src="ent.jpg" alt="">
      <h3>ENT specialist</h3>
      <p> Doctors who specialize in this area are called otorhinolaryngologists, otolaryngologists, head and neck surgeons, or ENT surgeons or physicians. Patients seek treatment from an otorhinolaryngologist for diseases of the ear, nose, throat, base of the skull, head, and neck.</p>
   </div>
   <div class="box">
      <img src="p.jpg" alt="">
      <h3>Pediatrics</h3>
      <p>Pediatrics is the branch of medicine that involves the medical care of infants, children, adolescents, and young adults.</p>
   </div>

</div>

</section>

       </body>
    <style>
        body  {
          width: 100%;
          height: 109vh;
           background-color: skyblue;
           background-position: center;
    background-size: cover;
    
        }
        .heading{
   text-align: center;
   font-size: 2.5rem;
   color:var(--black);
   text-transform: uppercase;
   font-weight: bolder;
   margin-bottom: 3rem;
}
        .services{
   background-color: var(--light-bg);
}

.services .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}

.services .box-container .box{
   text-align: center;
   padding:2rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.services .box-container .box img{
   margin:1rem 0;
   height: 8rem;
}

.services .box-container .box h3{
   font-size: 1.5rem;
   padding:0.5rem 0;
   color:var(--black);
}

.services .box-container .box p{
   font-size: 1.2rem;
   color:var(--light-color);
   line-height: 2;
}
        </style>
      
        </html>