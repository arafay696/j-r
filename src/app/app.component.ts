import {Component, OnInit} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';

import {URLSearchParams} from '@angular/http';
import {Router} from '@angular/router';

import {APIResponse} from './interface/api.response';
import {AppConfig} from '../environments/app.settings';

@Component({
    selector: 'app-root',
    templateUrl: './template/app.component.html',
    styleUrls: ['./app.component.css']
})

export class AppComponent implements OnInit {
    title = 'Join & Ride';
    private header = new HttpHeaders({'x-api-key': AppConfig.APIKEY});

    // Contructor
    constructor(private http: HttpClient, private router: Router) {

    }

    ngOnInit() {
        this.http.get<APIResponse>(AppConfig.BASEURL + '/users', {
            headers: this.header
        }).subscribe(results => {
                console.log(results);
            },
            err => {
                console.log('Error occured on project listing API.');
            }
        );
    }
}
