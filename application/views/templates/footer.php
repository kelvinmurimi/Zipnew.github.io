 <!--footer-->
   <?php 
   $company="Zip news";
    $date=date("Y");

   ?>
        <footer id="main-footer">
            <div>Copyright &copy; <?php echo $date;?> &mdash;<?php echo $company;?></div>
            <div>project by <a href="">kelvin kinyua</a> <small>inspired by <a href=""> Travercy Media</a></small></div>
        </footer>

        
  <script>
		   let btn =document.getElementById('btn-quotes');
           let output = document.getElementById('output');
          let quotes =
     [

       '"The greatest glory in living lies not in never falling, but in rising every time we fall." -Nelson Mandela',
       '"The way to get started is to quit talking and begin doing." -Walt Disney',
      '"Your time is limited, so dont waste it living someone elses life. Dont be trapped by dogma – which is living with the results of other peoples thinking." -Steve Jobs',
       '"If life were predictable it would cease to be life, and be without flavor."-Eleanor Roosevelt',
      '"If you look at what you have in life, youll always have more. If you look at what you dont have in life, youll never have enough." -Oprah Winfrey',
      '"If you set your goals ridiculously high and its a failure, you will fail above everyone elses success." -James Cameron',
      '"Life is what happens when youre busy making other plans." -John Lennon',

        '" The pessimist sees Difficulty in Every Opportunity.The optimist sees Oportunity in Every Difficulty."-Winston Churchil',
        '"Dont let Yesterday Take too Much of your Today"-Will Rogers',
        '"We may Encounter Many Defeats but we Must Not be Defeated"-Maya ANgelou',

      ];
         function getQuote(){
           var radomNumber=Math.floor(Math.random()*quotes.length);
           document.getElementById('NewQuoteSection').innerHTML=quotes[radomNumber];
         };
        
	   </script>
    
     
       <script type="text/javascript">
        CKEDITOR.replace('editor1');
     </script>
	<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
	
</body>
</html>