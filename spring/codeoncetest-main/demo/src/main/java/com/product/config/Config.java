package com.product.config;

import org.elasticsearch.client.RestHighLevelClient;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.data.elasticsearch.client.ClientConfiguration;
import org.springframework.data.elasticsearch.client.RestClients;
import org.springframework.data.elasticsearch.core.ElasticsearchOperations;
import org.springframework.data.elasticsearch.core.ElasticsearchRestTemplate;
import org.springframework.data.elasticsearch.repository.config.EnableElasticsearchRepositories;

import com.product.model.Product;

@Configuration
@EnableElasticsearchRepositories
public class Config {

    @Bean
    public RestHighLevelClient client() {
        ClientConfiguration clientConfiguration 
            = ClientConfiguration.builder()
                .connectedTo("localhost:9200")
                .build();

        return RestClients.create(clientConfiguration).rest();
    }

    @Bean
    public ElasticsearchOperations elasticsearchTemplate() {
        return new ElasticsearchRestTemplate(client());
    }
    
    @Bean
    void autoCreateIndexes() {
    	ElasticsearchRestTemplate elasticsearchTemplate = new ElasticsearchRestTemplate(client());
    	
    	if(!elasticsearchTemplate.indexOps(Product.class).exists()) {
        	elasticsearchTemplate.indexOps(Product.class).create();
    	}
    }
}