package com.product.test.service;

import static org.junit.jupiter.api.Assertions.assertEquals;
import static org.mockito.Mockito.when;

import java.util.Arrays;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.mockito.InjectMocks;
import org.mockito.Mock;
import org.mockito.MockitoAnnotations;

import com.product.model.Categorie;
import com.product.model.Product;
import com.product.repo.ProductRepo;
import com.product.service.ProductService;
import com.product.service.ProductServiceImpl;

public class TestService {
	@Mock
	ProductRepo productRepo ;
	
	@InjectMocks 
	ProductService productService = new ProductServiceImpl() ; 
	@BeforeEach 
	public void init () {
		MockitoAnnotations.initMocks(this);
	}
	
	@Test
	public void getbycategorietest() {
		Product p3 = new Product() ;
		p3.setCategorie(Categorie.Headset);
		p3.setQuantity(20) ;
        when (productRepo.findByCategorie("Headset")).thenReturn(Arrays.asList(p3));
        assertEquals(Arrays.asList(p3),productService.FindProductByCategorie("Headset"));
	}

}
