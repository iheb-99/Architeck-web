package com.product.service;

import java.util.List;
import java.util.Optional;

import com.product.model.Categorie;
import com.product.model.Product;

public interface ProductService {

	Product createProduct(Product p);
	List<Product> FindProductByCategorie(String categorie);
	

}
