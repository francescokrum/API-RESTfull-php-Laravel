import { Component } from '@angular/core';
import { environment } from 'src/environments/environment';
import { LivroService } from './services/livro.service';
import { Livro } from './model/livro.model';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'front';

  livros: Livro[] = []

  constructor(private livroService: LivroService){
    this.buscarLivrosCadastrados();
    }

  buscarLivrosCadastrados(){

    this.livroService.buscaLivros()
    .subscribe(livros => this.livros = livros) 
  }
}
