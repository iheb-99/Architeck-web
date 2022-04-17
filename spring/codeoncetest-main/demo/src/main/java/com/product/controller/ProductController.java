package com.product.controller;

import java.util.List;

import javax.websocket.server.PathParam;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.http.HttpStatus;

import com.product.model.Product;
import com.product.service.ProductService;

@RestController
@CrossOrigin("*")
public class ProductController {
	@Autowired
	ProductService ProductService;
	
	
	@PostMapping("/product")
	public Product createProduct(@RequestBody Product product){
		return this.ProductService.createProduct(product);
	}
	/*@PutMapping ("/update-Product")
	public ResponseEntity<?> updateProduct(@RequestBody Product product){
		try {
			this.ProductService.updateProduct(product);
			return new ResponseEntity<>(HttpStatus.CREATED);
			}catch (Exception e) {
				return new ResponseEntity<>(HttpStatus.CONFLICT);
			}
	}
	
	@DeleteMapping("/delete-Product/{id}")
	public ResponseEntity<?> deleteProduct(@PathVariable Long id){
		try {
			this.ProductService.deleteProduct(id);
			return new ResponseEntity<>(HttpStatus.CREATED);
		}catch (Exception e) {
			return new ResponseEntity<>(HttpStatus.CONFLICT);
			
		}
	}
	*/
	@GetMapping("/product")
	List<Product> getProductsByGategorie(@PathParam("categorie") String categorie){
		return this.ProductService.FindProductByCategorie(categorie);
	}
}
