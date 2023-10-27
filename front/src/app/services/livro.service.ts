import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http"   
import { environment } from "src/environments/environment";
import { Livro } from "../model/livro.model";
import { Observable } from "rxjs";

@Injectable({
    providedIn: 'root'
})

export class LivroService{

    private url = `${environment.api}/livros`

    constructor(private httpClient: HttpClient){
    }

    buscaLivros(){

        return this.httpClient.get<Livro[]>(this.url)

    } 

    cadastrarLivro(livro: any){

        return this.httpClient.post(this.url, livro);
    
      }

    editarLivro(livro: Livro){

        return this.httpClient.put(`${this.url}/${livro.identify}`, livro);

      }

    deletarLivro(identify: number){

        return this.httpClient.delete<void>(`${this.url}/${identify}`);

    }

}