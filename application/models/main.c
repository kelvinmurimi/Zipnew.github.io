#include <stdio.h>
#include <stdlib.h>

int main()
{
   int age;
   age=0;
   printf("Please enter your Age.\n");
   scanf("%d",&age);
    //check coditions 
    if(age<=10){
    	
		printf(":Your are a child because your age is 10years or Below!\n");
		
	}else if(age<=20){
		
		printf(":Your are a Teenager because your age is between  10years and 20years!\n");
		
	}else if(age<=35){
		
	  	printf(":Your are an udult because your age is between 21years and 35years!\n");
		  	
	}else{
		
		printf("You are now old enjoy life in christ\n");
	}
   
   
   
   return 0;
}