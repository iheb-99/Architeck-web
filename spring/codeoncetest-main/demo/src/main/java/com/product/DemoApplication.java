package com.product;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;

import com.product.model.Categorie;
import com.product.model.Product;
import com.product.repo.ProductRepo;

@SpringBootApplication
public class DemoApplication {
	@Autowired
	ProductRepo repo;

	public static void main(String[] args) {
		
		
		SpringApplication.run(DemoApplication.class, args);
	}
	
	@Bean
	void createNewVal() {
		/*Product p = new Product();
		p.setCategorie(Categorie.TV);
		p.setQuantity(10);
		repo.save(p);

		Product p2 = new Product() ;
		p2.setCategorie(Categorie.SMART_PHONE);
		p2.setQuantity(0);
        repo.save(p2) ;

		Product p3 = new Product() ;
		p3.setCategorie(Categorie.Headset);
		p3.setQuantity(20) ;
        repo.save(p3) ;

		Product p4 = new Product() ;
		p4.setCategorie(Categorie.Playstation);
		p4.setQuantity(0) ;
        repo.save(p4) ;*/
		
		System.out.println(repo.findByCategorie("TV"));

		
	}

}
