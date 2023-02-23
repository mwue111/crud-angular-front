import { Component, OnInit } from '@angular/core';
import { CategoryService } from 'src/app/category.service';
import { Category } from 'src/app/category';
import { Router } from '@angular/router';

@Component({
  selector: 'app-list-category',
  templateUrl: './list-category.component.html',
  styleUrls: ['./list-category.component.css']
})
export class ListCategoryComponent implements OnInit {

  listCategories:any = [];

  constructor(
    private cs: CategoryService,
    private router: Router,
  ) {}

  ngOnInit(): void {
    this.loadCategories();
  }

  loadCategories() {
    return this.cs.getCategories()
      .subscribe((data) => {
        console.log('data: ', data);
        this.listCategories = data;
      })
  }

  onDelete(id:number) {
    this.cs.deleteCategory(id)
      .subscribe(response => this.loadCategories());
  }

  onEdit(category:Category){
    this.cs.selectedCategory = Object.assign({}, category);
    this.router.navigate(["/add"]);
    // this.cs.updateCategory(id)
    //   .subscribe(res => this.loadCategories())
  }
}
