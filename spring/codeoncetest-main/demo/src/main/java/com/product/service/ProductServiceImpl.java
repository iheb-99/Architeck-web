package com.product.service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.product.model.Categorie;
import com.product.model.Product;
import com.product.repo.ProductRepo;
@Service
public class ProductServiceImpl implements ProductService {
	@Autowired
	ProductRepo productRepo;

	@Override
	public Product createProduct(Product p) {
		// TODO Auto-generated method stub
		return this.productRepo.save(p);
	}

	@Override
	public List<Product> FindProductByCategorie(String c) {
		// TODO Auto-generated method stub
		return this.productRepo.findByCategorie(c);
	}
	
	
}
