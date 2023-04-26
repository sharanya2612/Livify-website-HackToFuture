<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}


.header {
  padding: 20px;
  font-size: 70px;
  text-align: center;
  background: url("head.JPG");
  background-size: 100vw;
  background-repeat: no-repeat;
  color:red;
  font-family: cursive;
}


.leftcolumn {   
  float: left;
  width: 70%;
 
}


.rightcolumn {
  float: left;
  width: 30%;
  padding-left: 20px;
}

.fakeimg1 {
  background: url("mh.JPG");
  width: 100%;
  padding: 20px;
}
.fakeimg2{
    background: url("mentalha.png");
  width: 90%;
  padding: 20px;
}

.card {
    background: url("head.JPG");
    background-size: 100% 100%;
    background-repeat: no-repeat;
   padding: 20px;
   margin-top: 20px;
}
img{
    width:100%;
    height: 300px;
}

h2{
    color:green;
}
div{
    color:rgb(140, 9, 96);
   
  
}
.row:after {
  content: "";
  display: table;
  clear: both;
}




@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

<div class="header">
  <b>Serenity Space</b>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Mental Health</h2>
      <h5>Title description, Apr 25, 2023</h5>
      <div class="img" ><img src="mh.JPG"></div>
      
      <p>Mental health is a state of wellbeing where people and societies function at their best. That is, where people can cope with the stresses of everyday life, work productively, and contribute to their communities.
 
        Mental health conditions and neurological disorders are conditions that affect thoughts, emotions, behaviours, and relationships. These include disorders that cause a high burden of disease such as depression, bipolar affective disorder, schizophrenia, anxiety disorders, dementia, substance use disorders, among many others. These conditions can be experienced in isolation; however, they often occur alongside other noncommunicable diseases such as cardiovascular disease, diabetes, respiratory diseases and cancers.
        Mental illnesses affect 19% of the adult population, 46% of teenagers and 13% of children each year. People struggling with their mental health may be in your family, live next door, teach your children, work in the next cubicle or sit in the same church pew.</p>
    </div>
    <div class="card">
      <h2>Awareness</h2>
      <h5>Title description, Apr 25, 2023</h5>
      <div class="img" ><img src="mentalha.png"></div>
      
      <p>Research on prevention of mental health and neurological disorders is still being developed, but health-promoting lifestyle choices can decrease one’s risk of these diseases.
 
        A nutritious diet, avoidance of tobacco, abstinence from alcohol, and increased physical activity all can qualify as preventative measures. Worldwide 10-20% of children and adolescents experience mental disorders. Half of all mental illnesses begin by the age of 14 and three-quarters by mid-20s. Focussing on prevention throughout the life course, through early detection and prevention of mental health problems, is critical.</p>
    </div>
    <div class="card">
        <h2>Help</h2>
        <h5>Title description, Apr 25, 2023</h5>
        <div class="img" ><img src="help.JPG"></div>
        
        <p>Although the general perception of mental illness has improved over the past decades, studies show that stigma against mental illness is still powerful, largely due to media stereotypes and lack of education, and that people tend to attach negative stigmas to mental health conditions at a far higher rate than to other diseases and disabilities, such as cancer, diabetes or heart disease.

            Stigma affects not only the number seeking treatment, but also the number of resources available for proper treatment. Stigma and misinformation can feel like overwhelming obstacles for someone who is struggling with a mental health condition. Here a few powerful things you can do to help:
            <ul>
            <li> Showing individuals respect and acceptance removes a significant barrier to successfully coping with their illness. Having people see you as an individual and not as your illness can make the biggest difference for someone who is struggling with their mental health.</li>
          <li>  Advocating within our circles of influence helps ensure these individuals have the same rights and opportunities as other members of your church, school and community.</li>
           <li> Learning more about mental health allows us to provide helpful support to those affected in our families and communities.</li>
            </ul>
        </p>
      </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Green Ribbon</h2>
      <div class="img3" style="height:100%;"><img src="gr.JPG"></div>
      <p>The green ribbon is the international symbol of mental health awareness. Wear a green ribbon to show colleagues, loved ones or simply those you walk past that you care about their mental health. It can also be worn in memory of a loved one.</p>
    </div>
    <div class="card">
      <h2>Popular Posts</h2>
      <div class="img"><img src="helpline.JPG"></div><br>
      <div class="img"><img src="day.JPG"></div><br>
      <div class="img"><img src="month.JPG"></div>
    </div>
    
        <div class="card">
            <h2>Helpline Numbers:</h2>
            <p style="color: black;">All India(KIRAN):</p><a href="tel:18005990019">18005990019</a>
                <p style="color: black;">All India(VANDREVALA FOUNDATION):</p><a href="tel:1860-266-2345">1860-266-2345</a>
                    <p style="color: black;">All India(VANDREVALA FOUNDATION):</p> <a href="mailto: help@vandrevalafoundation.com ">help@vandrevalafoundation.com </a>           
         </div>
            </div>
  </div>
</div>



</body>
</html>
