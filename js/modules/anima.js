export function animacao() {
    
    gsap.from(".hero-container_details", {
        duration: 1.5,
        opacity: 0,
        ease: "power1.out"
    });
    
    gsap.from(".hero-text_details", {
        duration: 1.5,
        opacity: 0,
        ease: "power1.out",
        delay: 0.5 
    });
    
    gsap.from([".box_text_hero", ".box_img_hero"], {
        duration: 1,         
        y: 50,              
        opacity: 0,          
        ease: "power1.out",  
        stagger: 0.3         
    });
    
    gsap.from(".box_img_hero_mobile", {
        duration: 1,         
        y: 50,             
        opacity: 0,          
        ease: "power1.out",  
        delay: 0.5           
    });
    
    // Registrando o ScrollTrigger no GSAP
   
    
    // Animações de Scroll com ScrollTrigger
    gsap.from(".box_text_over", {
        scrollTrigger: {
            trigger: ".container_overview", 
            start: "top 80%",              
            end: "bottom 50%",             
            toggleActions: "play none none none", 
        },
        duration: 1.5,
        opacity: 0,  
        y: 50,    
        delay: 0.3, 
        ease: "power2.out",
    });
    
    gsap.from(".box_img_over img", {
        scrollTrigger: {
            trigger: ".container_overview", 
            start: "top 80%", 
            toggleActions: "play none none none",
        },
        duration: 1.5,
        opacity: 0, 
        x: 100,     
        ease: "power2.out",
    });
    
    gsap.from(".h2_title_center", {
        scrollTrigger: {
            trigger: ".h2_title_center", 
            start: "top 80%", 
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".h5_work_title", {
        scrollTrigger: {
            trigger: ".h5_work_title",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".work_text", {
        scrollTrigger: {
            trigger: ".work_text",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".container_reels", {
        scrollTrigger: {
            trigger: ".container_reels",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".research_details", {
        scrollTrigger: {
            trigger: ".h5_work_title",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".box_ideation_img", {
        scrollTrigger: {
            trigger: ".box_ideation_img",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".box_development_img", {
        scrollTrigger: {
            trigger: ".box_development_img",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".h5_development_title", {
        scrollTrigger: {
            trigger: ".h5_development_title",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".development_details", {
        scrollTrigger: {
            trigger: ".development_details",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".h2_title_center_prj", {
        scrollTrigger: {
            trigger: ".h2_title_center_prj",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".work_prj_text", {
        scrollTrigger: {
            trigger: ".work_prj_text",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".container_video", {
        scrollTrigger: {
            trigger: ".container_video",
            start: "top 80%",
            toggleActions: "play none none none",
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        ease: "power2.out",
    });
    
    gsap.from(".section_about .about-title", {
        scrollTrigger: {
            trigger: ".section_about", 
            start: "top 80%",         
            toggleActions: "play none none none", 
            markers: false            
        },
        duration: 1,                 
        opacity: 0,                  
        y: 50,                       
        ease: "power1.out",          
        stagger: 0.2                
    });
    
    gsap.from(".box_contact_highlight", {
        scrollTrigger: {
            trigger: ".box_contact_highlight",  
            start: "top 75%",  
            toggleActions: "play none none none",
            markers: false
        },
        duration: 0.5,
        opacity: 0,
        y: 0,   
        ease: "power1.out",
    });
    
    gsap.from(".h2_more_info", {
        scrollTrigger: {
            trigger: ".box_contact_highlight",  
            start: "top 75%",  
            toggleActions: "play none none none",
            markers: false
        },
        duration: 1,
        opacity: 0,
        y: 20,   
        ease: "power1.out",
        delay: 0.2,
    });
    
    gsap.from(".box_btn", {
        scrollTrigger: {
            trigger: ".box_contact_highlight",
            start: "top 75%", 
            toggleActions: "play none none none"
        },
        duration: 1,
        opacity: 0,
        y: 0,   
        ease: "power1.out",
    });
    
    gsap.from(['#work .box_titles', '#work .box_text', '#work .player', '.container_work_n'], {
        opacity: 0,             
        y: 50,                  
        duration: 1,             
        stagger: 0.3,            
        scrollTrigger: {
            trigger: '#work',         
            start: "top 80%",         
            end: "top 30%",            
            scrub: true,              
            once: true               
        }
    });
    
    gsap.from('.project_link', {
        opacity: 0,                
        y: 50,                      
        duration: 1,                 
        stagger: 0.2,                
        scrollTrigger: {
            trigger: '.container_work_n', 
            start: "top 80%",            
            end: "top 30%",              
            scrub: true,                 
            once: true,
            delay: 0.2,            
        }
    });
    
    gsap.from(['#contact .box_title_contact', '#contact .box_form_contact'], {
        opacity: 0,              
        y: 50,                  
        duration: 1,             
        stagger: 0.3,            
        scrollTrigger: {
            trigger: '#contact',  
            start: "top 80%",     
            end: "top 30%",        
            scrub: true,           
            once: true             
        }
    });
}