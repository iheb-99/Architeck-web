package com.product.repo;

import java.util.List;

import org.springframework.data.elasticsearch.annotations.Query;
import org.springframework.data.elasticsearch.repository.ElasticsearchRepository;

import com.product.model.Product;

public interface ProductRepo extends ElasticsearchRepository<Product, String> {
	
	@Query("{ \"bool\" : { \"must\" : [{ \"query_string\" : { \"query\" : \"?0\", \"fields\" : [ \"categorie\" ] } },{\"range\" : {\"quantity\" : {\"gte\" : 1}}}]}}")
	List<Product> findByCategorie(String c);


}