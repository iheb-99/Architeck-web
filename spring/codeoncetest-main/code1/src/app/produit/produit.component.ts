import { Component, OnInit } from '@angular/core';
import { ProduitService } from '../services/produit.service';
import { Product } from '../model/product';
import { Categorie } from '../model/categorie';

@Component({
  selector: 'app-produit',
  templateUrl: './produit.component.html',
  styleUrls: ['./produit.component.css']
})
export class ProduitComponent implements OnInit {
  listProduits!:Product[];
  categorie!:Categorie[];
  selectedLevel="--select something --";
  constructor(private produitService: ProduitService) { }

  ngOnInit(): void {
    this.listProduits=[];
    this.categorie=[
      {id: 1, name: "TV" },
      {id: 2, name: "Smart_phone" }
  ];
 
  }

  submit(name: string): void {
    this.produitService.getProduit(name).subscribe(
      (data:Product[])=>this.listProduits = data);
  }
}
