"use strict";

$(function()
{
    //inicjalizacja zmiennych
    var slideCount =$(".single-slide").length; //iloscslajdow
    
    var slideWidth = 100/slideCount; //wartość 20
    
    var slideShow = $(".slide-show");
    var slideIndex = 0; //bazowy index slajdu
    
    //Szerokość kontenera slajdShow
    slideShow.css("width", slideCount*100+"%"); //w tym przypadku 500%
    
    //iteracja po wszystkich slajdach nadamy margines i szerokość
    
    slideShow.find(".single-slide").each(function(index)
    {
       $(this).css({"width":slideWidth+"%", "margin-left": index *slideWidth+"%"});
    });
    
    //Przycisk poprzedni
    $(".prev-slide").click(function()
    {
        slide(slideIndex - 1); //wywołanie funkcji slide z nr indexu
    });
    
    //Przycisk następny
    $(".next-slide").click(function()
    {
        slide(slideIndex + 1); //wywołanie funkcji slide z nr indexu
    });
    
    function slide(newSlideIndex)
    {
        //console.log(newSlideIndex);
        if(newSlideIndex < 0 ||newSlideIndex>=slideCount)
        {
            return;
        }
        //console.log(newSlideIndex);
        
        var napisPoprzedzajacy=$(".slider-caption").eq(newSlideIndex);
        
        napisPoprzedzajacy.hide();
        var marginLeft = (newSlideIndex * (-100)+"%");
        
        //wywołanie animacji na elemencie slideShow
        
        
        slideShow.animate({"margin-left": marginLeft},800,function()
        {
            slideIndex = newSlideIndex;
            napisPoprzedzajacy.fadeIn("slow");
            console.log("działa");
        });    
        
        
        
    }  
});