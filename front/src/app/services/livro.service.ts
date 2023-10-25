import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http"   
import { environment } from "src/environments/environment";
import { Livro } from "../model/livro.model";

@Injectable({
    providedIn: 'root'
})

export class LivroService{

    private url = environment.api

    constructor(private httpClient: HttpClient){
    }

    buscaLivros(){

        return this.httpClient.get<Livro[]>(this.url + "/livros")

    } 

}