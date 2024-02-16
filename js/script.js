  var sidebarisOpen = 'true';
         
        togglebtn.addEventListener( 'click', (event) => {
            event.preventDefault();
          if(sidebarisOpen){
            dashboard_sidebar.style.width = '10%';
            dashboard_sidebar.style.transition = '0.5s all'; 
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontsize = '60px';
            userimg.style.width = '60px';

            menuIcons = document.getElementsByClassName('menutext');
            for(var i=0; i <menuIcons.length;i++){
                menuIcons[i].style.display = 'none';
            }
            document.getElementsByClassName( 'dashboard_menu_lists')[0].style.textalign = 'center';
            sidebarisOpen = false;

        }

        else{
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontsize = '80px';
            userimg.style.width = '80px';

            menuIcons = document.getElementsByClassName('menutext');
            for(var i=0; i <menuIcons.length;i++){
                menuIcons[i].style.display = 'inline-block';
            }
            document.getElementsByClassName( 'dashboard_menu_lists')[0].style.textalign = 'left';
            sidebarisOpen = true;
        }
     });
          