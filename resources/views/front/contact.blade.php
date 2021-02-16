@extends('front.app')
@section('content')
    @php($page = "contact_us")
    <div class="content-homepage">
        <div class="content-homepage">
            <div class="content-header-homepage  gradient-overlay">
                <div class="container">
                    <h2>{{ __('site.contact_us') }}</h2>
                </div>
            </div>
            <div class="content-body-homepage">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3 class="two-line-heading text-center">{{ __('site.contact_form') }}</h3>
                                <form action="{{ route('inbox.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control" placeholder="{{ __('site.name') }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control" placeholder="{{ __('site.email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-phone ">
                                            <input type="text" name="phone" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror form-control" placeholder="{{ __('site.phone') }}">
                                            <div class="input-group-prepend">
                                                <select class="selectpicker" name="nationality">
                                                    <option data-content="<span>970</span><img width='40' height='30' src='{{ asset('front/img/png/ps.png') }}'> ">970</option>
                                                    <option data-content="<span>966</span><img width='40' height='30' src='{{ asset('front/img/png/sa.png') }}'> ">966</option>
                                                    <option data-content="<span>964</span><img width='40' height='30' width='40' height='30' src='{{ asset('front/img/png/iq.png') }}'> ">964</option>
                                                    <option data-content="<span>93</span><img width='40' height='30' width='40' height='30' src='{{ asset('front/img/png/af.png') }}'> ">93</option>
                                                    <option data-content="<span>355</span><img width='40' height='30' src='{{ asset('front/img/png/al.png') }}'> ">355</option>
                                                    <option data-content="<span></span><img width='40' height='30' src='{{ asset('front/img/png/aq.png') }}'> "></option>
                                                    <option data-content="<span>213</span><img width='40' height='30' src='{{ asset('front/img/png/dz.png') }}'> ">213</option>
                                                    <option data-content="<span>+1-684</span><img width='40' height='30' src='{{ asset('front/img/png/as.png') }}'> ">+1-684</option>
                                                    <option data-content="<span>376</span><img width='40' height='30' src='{{ asset('front/img/png/ad.png') }}'> ">376</option>
                                                    <option data-content="<span>244</span><img width='40' height='30' src='{{ asset('front/img/png/ao.png') }}'> ">244</option>
                                                    <option data-content="<span>+1-268</span><img width='40' height='30' src='{{ asset('front/img/png/ag.png') }}'> ">+1-268</option>
                                                    <option data-content="<span>994</span><img width='40' height='30' src='{{ asset('front/img/png/az.png') }}'> ">994</option>
                                                    <option data-content="<span>54</span><img width='40' height='30' src='{{ asset('front/img/png/ar.png') }}'> ">54</option>
                                                    <option data-content="<span>61</span><img width='40' height='30' src='{{ asset('front/img/png/au.png') }}'> ">61</option>
                                                    <option data-content="<span>43</span><img width='40' height='30' src='{{ asset('front/img/png/at.png') }}'> ">43</option>
                                                    <option data-content="<span>+1-242</span><img width='40' height='30' src='{{ asset('front/img/png/bs.png') }}'> ">+1-242</option>
                                                    <option data-content="<span>973</span><img width='40' height='30' src='{{ asset('front/img/png/bh.png') }}'> ">973</option>
                                                    <option data-content="<span>880</span><img width='40' height='30' src='{{ asset('front/img/png/bd.png') }}'> ">880</option>
                                                    <option data-content="<span>374</span><img width='40' height='30' src='{{ asset('front/img/png/am.png') }}'> ">374</option>
                                                    <option data-content="<span>+1-246</span><img width='40' height='30' src='{{ asset('front/img/png/bb.png') }}'> ">+1-246</option>
                                                    <option data-content="<span>32</span><img width='40' height='30' src='{{ asset('front/img/png/be.png') }}'> ">32</option>
                                                    <option data-content="<span>+1-441</span><img width='40' height='30' src='{{ asset('front/img/png/bm.png') }}'> ">+1-441</option>
                                                    <option data-content="<span>975</span><img width='40' height='30' src='{{ asset('front/img/png/bt.png') }}'> ">975</option>
                                                    <option data-content="<span>591</span><img width='40' height='30' src='{{ asset('front/img/png/bo.png') }}'> ">591</option>
                                                    <option data-content="<span>387</span><img width='40' height='30' src='{{ asset('front/img/png/ba.png') }}'> ">387</option>
                                                    <option data-content="<span>267</span><img width='40' height='30' src='{{ asset('front/img/png/bw.png') }}'> ">267</option>
                                                    <option data-content="<span></span><img width='40' height='30' src='{{ asset('front/img/png/bv.png') }}'> "></option>
                                                    <option data-content="<span>55</span><img width='40' height='30' src='{{ asset('front/img/png/br.png') }}'> ">55</option>
                                                    <option data-content="<span>501</span><img width='40' height='30' src='{{ asset('front/img/png/bz.png') }}'> ">501</option>
                                                    <option data-content="<span>246</span><img width='40' height='30' src='{{ asset('front/img/png/io.png') }}'> ">246</option>
                                                    <option data-content="<span>677</span><img width='40' height='30' src='{{ asset('front/img/png/sb.png') }}'> ">677</option>
                                                    <option data-content="<span>+1-284</span><img width='40' height='30' src='{{ asset('front/img/png/vg.png') }}'> ">+1-284</option>
                                                    <option data-content="<span>673</span><img width='40' height='30' src='{{ asset('front/img/png/bn.png') }}'> ">673</option>
                                                    <option data-content="<span>359</span><img width='40' height='30' src='{{ asset('front/img/png/bg.png') }}'> ">359</option>
                                                    <option data-content="<span>95</span><img width='40' height='30' src='{{ asset('front/img/png/mm.png') }}'> ">95</option>
                                                    <option data-content="<span>257</span><img width='40' height='30' src='{{ asset('front/img/png/bi.png') }}'> ">257</option>
                                                    <option data-content="<span>375</span><img width='40' height='30' src='{{ asset('front/img/png/by.png') }}'> ">375</option>
                                                    <option data-content="<span>855</span><img width='40' height='30' src='{{ asset('front/img/png/kh.png') }}'> ">855</option>
                                                    <option data-content="<span>237</span><img width='40' height='30' src='{{ asset('front/img/png/cm.png') }}'> ">237</option>
                                                    <option data-content="<span>1</span><img width='40' height='30' src='{{ asset('front/img/png/ca.png') }}'> ">1</option>
                                                    <option data-content="<span>238</span><img width='40' height='30' src='{{ asset('front/img/png/cv.png') }}'> ">238</option>
                                                    <option data-content="<span>+1-345</span><img width='40' height='30' src='{{ asset('front/img/png/ky.png') }}'> ">+1-345</option>
                                                    <option data-content="<span>236</span><img width='40' height='30' src='{{ asset('front/img/png/cf.png') }}'> ">236</option>
                                                    <option data-content="<span>94</span><img width='40' height='30' src='{{ asset('front/img/png/lk.png') }}'> ">94</option>
                                                    <option data-content="<span>235</span><img width='40' height='30' src='{{ asset('front/img/png/td.png') }}'> ">235</option>
                                                    <option data-content="<span>56</span><img width='40' height='30' src='{{ asset('front/img/png/cl.png') }}'> ">56</option>
                                                    <option data-content="<span>86</span><img width='40' height='30' src='{{ asset('front/img/png/cn.png') }}'> ">86</option>
                                                    <option data-content="<span>886</span><img width='40' height='30' src='{{ asset('front/img/png/tw.png') }}'> ">886</option>
                                                    <option data-content="<span>61</span><img width='40' height='30' src='{{ asset('front/img/png/cx.png') }}'> ">61</option>
                                                    <option data-content="<span>61</span><img width='40' height='30' src='{{ asset('front/img/png/cc.png') }}'> ">61</option>
                                                    <option data-content="<span>57</span><img width='40' height='30' src='{{ asset('front/img/png/co.png') }}'> ">57</option>
                                                    <option data-content="<span>269</span><img width='40' height='30' src='{{ asset('front/img/png/km.png') }}'> ">269</option>
                                                    <option data-content="<span>262</span><img width='40' height='30' src='{{ asset('front/img/png/yt.png') }}'> ">262</option>
                                                    <option data-content="<span>242</span><img width='40' height='30' src='{{ asset('front/img/png/cg.png') }}'> ">242</option>
                                                    <option data-content="<span>243</span><img width='40' height='30' src='{{ asset('front/img/png/cd.png') }}'> ">243</option>
                                                    <option data-content="<span>682</span><img width='40' height='30' src='{{ asset('front/img/png/ck.png') }}'> ">682</option>
                                                    <option data-content="<span>506</span><img width='40' height='30' src='{{ asset('front/img/png/cr.png') }}'> ">506</option>
                                                    <option data-content="<span>385</span><img width='40' height='30' src='{{ asset('front/img/png/hr.png') }}'> ">385</option>
                                                    <option data-content="<span>53</span><img width='40' height='30' src='{{ asset('front/img/png/cu.png') }}'> ">53</option>
                                                    <option data-content="<span>357</span><img width='40' height='30' src='{{ asset('front/img/png/cy.png') }}'> ">357</option>
                                                    <option data-content="<span>420</span><img width='40' height='30' src='{{ asset('front/img/png/cz.png') }}'> ">420</option>
                                                    <option data-content="<span>229</span><img width='40' height='30' src='{{ asset('front/img/png/bj.png') }}'> ">229</option>
                                                    <option data-content="<span>45</span><img width='40' height='30' src='{{ asset('front/img/png/dk.png') }}'> ">45</option>
                                                    <option data-content="<span>+1-767</span><img width='40' height='30' src='{{ asset('front/img/png/dm.png') }}'> ">+1-767</option>
                                                    <option data-content="<span>+1-809 and 1-829</span><img width='40' height='30' src='{{ asset('front/img/png/do.png') }}'> ">+1-809 and 1-829</option>
                                                    <option data-content="<span>593</span><img width='40' height='30' src='{{ asset('front/img/png/ec.png') }}'> ">593</option>
                                                    <option data-content="<span>503</span><img width='40' height='30' src='{{ asset('front/img/png/sv.png') }}'> ">503</option>
                                                    <option data-content="<span>240</span><img width='40' height='30' src='{{ asset('front/img/png/gq.png') }}'> ">240</option>
                                                    <option data-content="<span>251</span><img width='40' height='30' src='{{ asset('front/img/png/et.png') }}'> ">251</option>
                                                    <option data-content="<span>291</span><img width='40' height='30' src='{{ asset('front/img/png/er.png') }}'> ">291</option>
                                                    <option data-content="<span>372</span><img width='40' height='30' src='{{ asset('front/img/png/ee.png') }}'> ">372</option>
                                                    <option data-content="<span>298</span><img width='40' height='30' src='{{ asset('front/img/png/fo.png') }}'> ">298</option>
                                                    <option data-content="<span>500</span><img width='40' height='30' src='{{ asset('front/img/png/fk.png') }}'> ">500</option>
                                                    <option data-content="<span></span><img width='40' height='30' src='{{ asset('front/img/png/gs.png') }}'> "></option>
                                                    <option data-content="<span>679</span><img width='40' height='30' src='{{ asset('front/img/png/fj.png') }}'> ">679</option>
                                                    <option data-content="<span>358</span><img width='40' height='30' src='{{ asset('front/img/png/fi.png') }}'> ">358</option>
                                                    <option data-content="<span>+358-18</span><img width='40' height='30' src='{{ asset('front/img/png/ax.png') }}'> ">+358-18</option>
                                                    <option data-content="<span>33</span><img width='40' height='30' src='{{ asset('front/img/png/fr.png') }}'> ">33</option>
                                                    <option data-content="<span>594</span><img width='40' height='30' src='{{ asset('front/img/png/gf.png') }}'> ">594</option>
                                                    <option data-content="<span>689</span><img width='40' height='30' src='{{ asset('front/img/png/pf.png') }}'> ">689</option>
                                                    <option data-content="<span></span><img width='40' height='30' src='{{ asset('front/img/png/tf.png') }}'> "></option>
                                                    <option data-content="<span>253</span><img width='40' height='30' src='{{ asset('front/img/png/dj.png') }}'> ">253</option>
                                                    <option data-content="<span>241</span><img width='40' height='30' src='{{ asset('front/img/png/ga.png') }}'> ">241</option>
                                                    <option data-content="<span>995</span><img width='40' height='30' src='{{ asset('front/img/png/ge.png') }}'> ">995</option>
                                                    <option data-content="<span>220</span><img width='40' height='30' src='{{ asset('front/img/png/gm.png') }}'> ">220</option>
                                                    <option data-content="<span>49</span><img width='40' height='30' src='{{ asset('front/img/png/de.png') }}'> ">49</option>
                                                    <option data-content="<span>233</span><img width='40' height='30' src='{{ asset('front/img/png/gh.png') }}'> ">233</option>
                                                    <option data-content="<span>350</span><img width='40' height='30' src='{{ asset('front/img/png/gi.png') }}'> ">350</option>
                                                    <option data-content="<span>686</span><img width='40' height='30' src='{{ asset('front/img/png/ki.png') }}'> ">686</option>
                                                    <option data-content="<span>30</span><img width='40' height='30' src='{{ asset('front/img/png/gr.png') }}'> ">30</option>
                                                    <option data-content="<span>299</span><img width='40' height='30' src='{{ asset('front/img/png/gl.png') }}'> ">299</option>
                                                    <option data-content="<span>+1-473</span><img width='40' height='30' src='{{ asset('front/img/png/gd.png') }}'> ">+1-473</option>
                                                    <option data-content="<span>590</span><img width='40' height='30' src='{{ asset('front/img/png/gp.png') }}'> ">590</option>
                                                    <option data-content="<span>+1-671</span><img width='40' height='30' src='{{ asset('front/img/png/gu.png') }}'> ">+1-671</option>
                                                    <option data-content="<span>502</span><img width='40' height='30' src='{{ asset('front/img/png/gt.png') }}'> ">502</option>
                                                    <option data-content="<span>224</span><img width='40' height='30' src='{{ asset('front/img/png/gn.png') }}'> ">224</option>
                                                    <option data-content="<span>592</span><img width='40' height='30' src='{{ asset('front/img/png/gy.png') }}'> ">592</option>
                                                    <option data-content="<span>509</span><img width='40' height='30' src='{{ asset('front/img/png/ht.png') }}'> ">509</option>
                                                    <option data-content="<span> </span><img width='40' height='30' src='{{ asset('front/img/png/hm.png') }}'> "> </option>
                                                    <option data-content="<span>379</span><img width='40' height='30' src='{{ asset('front/img/png/va.png') }}'> ">379</option>
                                                    <option data-content="<span>504</span><img width='40' height='30' src='{{ asset('front/img/png/hn.png') }}'> ">504</option>
                                                    <option data-content="<span>852</span><img width='40' height='30' src='{{ asset('front/img/png/hk.png') }}'> ">852</option>
                                                    <option data-content="<span>36</span><img width='40' height='30' src='{{ asset('front/img/png/hu.png') }}'> ">36</option>
                                                    <option data-content="<span>354</span><img width='40' height='30' src='{{ asset('front/img/png/is.png') }}'> ">354</option>
                                                    <option data-content="<span>91</span><img width='40' height='30' src='{{ asset('front/img/png/in.png') }}'> ">91</option>
                                                    <option data-content="<span>62</span><img width='40' height='30' src='{{ asset('front/img/png/id.png') }}'> ">62</option>
                                                    <option data-content="<span>98</span><img width='40' height='30' src='{{ asset('front/img/png/ir.png') }}'> ">98</option>
                                                    <option data-content="<span>353</span><img width='40' height='30' src='{{ asset('front/img/png/ie.png') }}'> ">353</option>
                                                    <option data-content="<span>39</span><img width='40' height='30' src='{{ asset('front/img/png/it.png') }}'> ">39</option>
                                                    <option data-content="<span>225</span><img width='40' height='30' src='{{ asset('front/img/png/ci.png') }}'> ">225</option>
                                                    <option data-content="<span>+1-876</span><img width='40' height='30' src='{{ asset('front/img/png/jm.png') }}'> ">+1-876</option>
                                                    <option data-content="<span>81</span><img width='40' height='30' src='{{ asset('front/img/png/jp.png') }}'> ">81</option>
                                                    <option data-content="<span>7</span><img width='40' height='30' src='{{ asset('front/img/png/kz.png') }}'> ">7</option>
                                                    <option data-content="<span>962</span><img width='40' height='30' src='{{ asset('front/img/png/jo.png') }}'> ">962</option>
                                                    <option data-content="<span>254</span><img width='40' height='30' src='{{ asset('front/img/png/ke.png') }}'> ">254</option>
                                                    <option data-content="<span>850</span><img width='40' height='30' src='{{ asset('front/img/png/kp.png') }}'> ">850</option>
                                                    <option data-content="<span>82</span><img width='40' height='30' src='{{ asset('front/img/png/kr.png') }}'> ">82</option>
                                                    <option data-content="<span>965</span><img width='40' height='30' src='{{ asset('front/img/png/kw.png') }}'> ">965</option>
                                                    <option data-content="<span>996</span><img width='40' height='30' src='{{ asset('front/img/png/kg.png') }}'> ">996</option>
                                                    <option data-content="<span>856</span><img width='40' height='30' src='{{ asset('front/img/png/la.png') }}'> ">856</option>
                                                    <option data-content="<span>961</span><img width='40' height='30' src='{{ asset('front/img/png/lb.png') }}'> ">961</option>
                                                    <option data-content="<span>266</span><img width='40' height='30' src='{{ asset('front/img/png/ls.png') }}'> ">266</option>
                                                    <option data-content="<span>371</span><img width='40' height='30' src='{{ asset('front/img/png/lv.png') }}'> ">371</option>
                                                    <option data-content="<span>231</span><img width='40' height='30' src='{{ asset('front/img/png/lr.png') }}'> ">231</option>
                                                    <option data-content="<span>218</span><img width='40' height='30' src='{{ asset('front/img/png/ly.png') }}'> ">218</option>
                                                    <option data-content="<span>423</span><img width='40' height='30' src='{{ asset('front/img/png/li.png') }}'> ">423</option>
                                                    <option data-content="<span>370</span><img width='40' height='30' src='{{ asset('front/img/png/lt.png') }}'> ">370</option>
                                                    <option data-content="<span>352</span><img width='40' height='30' src='{{ asset('front/img/png/lu.png') }}'> ">352</option>
                                                    <option data-content="<span>853</span><img width='40' height='30' src='{{ asset('front/img/png/mo.png') }}'> ">853</option>
                                                    <option data-content="<span>261</span><img width='40' height='30' src='{{ asset('front/img/png/mg.png') }}'> ">261</option>
                                                    <option data-content="<span>265</span><img width='40' height='30' src='{{ asset('front/img/png/mw.png') }}'> ">265</option>
                                                    <option data-content="<span>60</span><img width='40' height='30' src='{{ asset('front/img/png/my.png') }}'> ">60</option>
                                                    <option data-content="<span>960</span><img width='40' height='30' src='{{ asset('front/img/png/mv.png') }}'> ">960</option>
                                                    <option data-content="<span>223</span><img width='40' height='30' src='{{ asset('front/img/png/ml.png') }}'> ">223</option>
                                                    <option data-content="<span>356</span><img width='40' height='30' src='{{ asset('front/img/png/mt.png') }}'> ">356</option>
                                                    <option data-content="<span>596</span><img width='40' height='30' src='{{ asset('front/img/png/mq.png') }}'> ">596</option>
                                                    <option data-content="<span>222</span><img width='40' height='30' src='{{ asset('front/img/png/mr.png') }}'> ">222</option>
                                                    <option data-content="<span>230</span><img width='40' height='30' src='{{ asset('front/img/png/mu.png') }}'> ">230</option>
                                                    <option data-content="<span>52</span><img width='40' height='30' src='{{ asset('front/img/png/mx.png') }}'> ">52</option>
                                                    <option data-content="<span>377</span><img width='40' height='30' src='{{ asset('front/img/png/mc.png') }}'> ">377</option>
                                                    <option data-content="<span>976</span><img width='40' height='30' src='{{ asset('front/img/png/mn.png') }}'> ">976</option>
                                                    <option data-content="<span>373</span><img width='40' height='30' src='{{ asset('front/img/png/md.png') }}'> ">373</option>
                                                    <option data-content="<span>382</span><img width='40' height='30' src='{{ asset('front/img/png/me.png') }}'> ">382</option>
                                                    <option data-content="<span>+1-664</span><img width='40' height='30' src='{{ asset('front/img/png/ms.png') }}'> ">+1-664</option>
                                                    <option data-content="<span>212</span><img width='40' height='30' src='{{ asset('front/img/png/ma.png') }}'> ">212</option>
                                                    <option data-content="<span>258</span><img width='40' height='30' src='{{ asset('front/img/png/mz.png') }}'> ">258</option>
                                                    <option data-content="<span>968</span><img width='40' height='30' src='{{ asset('front/img/png/om.png') }}'> ">968</option>
                                                    <option data-content="<span>264</span><img width='40' height='30' src='{{ asset('front/img/png/na.png') }}'> ">264</option>
                                                    <option data-content="<span>674</span><img width='40' height='30' src='{{ asset('front/img/png/nr.png') }}'> ">674</option>
                                                    <option data-content="<span>977</span><img width='40' height='30' src='{{ asset('front/img/png/np.png') }}'> ">977</option>
                                                    <option data-content="<span>31</span><img width='40' height='30' src='{{ asset('front/img/png/nl.png') }}'> ">31</option>
                                                    <option data-content="<span>599</span><img width='40' height='30' src='{{ asset('front/img/png/cw.png') }}'> ">599</option>
                                                    <option data-content="<span>297</span><img width='40' height='30' src='{{ asset('front/img/png/aw.png') }}'> ">297</option>
                                                    <option data-content="<span>599</span><img width='40' height='30' src='{{ asset('front/img/png/sx.png') }}'> ">599</option>
                                                    <option data-content="<span>599</span><img width='40' height='30' src='{{ asset('front/img/png/bq.png') }}'> ">599</option>
                                                    <option data-content="<span>687</span><img width='40' height='30' src='{{ asset('front/img/png/nc.png') }}'> ">687</option>
                                                    <option data-content="<span>678</span><img width='40' height='30' src='{{ asset('front/img/png/vu.png') }}'> ">678</option>
                                                    <option data-content="<span>64</span><img width='40' height='30' src='{{ asset('front/img/png/nz.png') }}'> ">64</option>
                                                    <option data-content="<span>505</span><img width='40' height='30' src='{{ asset('front/img/png/ni.png') }}'> ">505</option>
                                                    <option data-content="<span>227</span><img width='40' height='30' src='{{ asset('front/img/png/ne.png') }}'> ">227</option>
                                                    <option data-content="<span>234</span><img width='40' height='30' src='{{ asset('front/img/png/ng.png') }}'> ">234</option>
                                                    <option data-content="<span>683</span><img width='40' height='30' src='{{ asset('front/img/png/nu.png') }}'> ">683</option>
                                                    <option data-content="<span>672</span><img width='40' height='30' src='{{ asset('front/img/png/nf.png') }}'> ">672</option>
                                                    <option data-content="<span>47</span><img width='40' height='30' src='{{ asset('front/img/png/no.png') }}'> ">47</option>
                                                    <option data-content="<span>+1-670</span><img width='40' height='30' src='{{ asset('front/img/png/mp.png') }}'> ">+1-670</option>
                                                    <option data-content="<span>1</span><img width='40' height='30' src='{{ asset('front/img/png/um.png') }}'> ">1</option>
                                                    <option data-content="<span>691</span><img width='40' height='30' src='{{ asset('front/img/png/fm.png') }}'> ">691</option>
                                                    <option data-content="<span>692</span><img width='40' height='30' src='{{ asset('front/img/png/mh.png') }}'> ">692</option>
                                                    <option data-content="<span>680</span><img width='40' height='30' src='{{ asset('front/img/png/pw.png') }}'> ">680</option>
                                                    <option data-content="<span>92</span><img width='40' height='30' src='{{ asset('front/img/png/pk.png') }}'> ">92</option>
                                                    <option data-content="<span>507</span><img width='40' height='30' src='{{ asset('front/img/png/pa.png') }}'> ">507</option>
                                                    <option data-content="<span>675</span><img width='40' height='30' src='{{ asset('front/img/png/pg.png') }}'> ">675</option>
                                                    <option data-content="<span>595</span><img width='40' height='30' src='{{ asset('front/img/png/py.png') }}'> ">595</option>
                                                    <option data-content="<span>51</span><img width='40' height='30' src='{{ asset('front/img/png/pe.png') }}'> ">51</option>
                                                    <option data-content="<span>63</span><img width='40' height='30' src='{{ asset('front/img/png/ph.png') }}'> ">63</option>
                                                    <option data-content="<span>870</span><img width='40' height='30' src='{{ asset('front/img/png/pn.png') }}'> ">870</option>
                                                    <option data-content="<span>48</span><img width='40' height='30' src='{{ asset('front/img/png/pl.png') }}'> ">48</option>
                                                    <option data-content="<span>351</span><img width='40' height='30' src='{{ asset('front/img/png/pt.png') }}'> ">351</option>
                                                    <option data-content="<span>245</span><img width='40' height='30' src='{{ asset('front/img/png/gw.png') }}'> ">245</option>
                                                    <option data-content="<span>670</span><img width='40' height='30' src='{{ asset('front/img/png/tl.png') }}'> ">670</option>
                                                    <option data-content="<span>+1-787 and 1-939</span><img width='40' height='30' src='{{ asset('front/img/png/pr.png') }}'> ">+1-787 and 1-939</option>
                                                    <option data-content="<span>974</span><img width='40' height='30' src='{{ asset('front/img/png/qa.png') }}'> ">974</option>
                                                    <option data-content="<span>262</span><img width='40' height='30' src='{{ asset('front/img/png/re.png') }}'> ">262</option>
                                                    <option data-content="<span>40</span><img width='40' height='30' src='{{ asset('front/img/png/ro.png') }}'> ">40</option>
                                                    <option data-content="<span>7</span><img width='40' height='30' src='{{ asset('front/img/png/ru.png') }}'> ">7</option>
                                                    <option data-content="<span>250</span><img width='40' height='30' src='{{ asset('front/img/png/rw.png') }}'> ">250</option>
                                                    <option data-content="<span>590</span><img width='40' height='30' src='{{ asset('front/img/png/bl.png') }}'> ">590</option>
                                                    <option data-content="<span>290</span><img width='40' height='30' src='{{ asset('front/img/png/sh.png') }}'> ">290</option>
                                                    <option data-content="<span>+1-869</span><img width='40' height='30' src='{{ asset('front/img/png/kn.png') }}'> ">+1-869</option>
                                                    <option data-content="<span>+1-264</span><img width='40' height='30' src='{{ asset('front/img/png/ai.png') }}'> ">+1-264</option>
                                                    <option data-content="<span>+1-758</span><img width='40' height='30' src='{{ asset('front/img/png/lc.png') }}'> ">+1-758</option>
                                                    <option data-content="<span>590</span><img width='40' height='30' src='{{ asset('front/img/png/mf.png') }}'> ">590</option>
                                                    <option data-content="<span>508</span><img width='40' height='30' src='{{ asset('front/img/png/pm.png') }}'> ">508</option>
                                                    <option data-content="<span>+1-784</span><img width='40' height='30' src='{{ asset('front/img/png/vc.png') }}'> ">+1-784</option>
                                                    <option data-content="<span>378</span><img width='40' height='30' src='{{ asset('front/img/png/sm.png') }}'> ">378</option>
                                                    <option data-content="<span>239</span><img width='40' height='30' src='{{ asset('front/img/png/st.png') }}'> ">239</option>
                                                    <option data-content="<span>221</span><img width='40' height='30' src='{{ asset('front/img/png/sn.png') }}'> ">221</option>
                                                    <option data-content="<span>381</span><img width='40' height='30' src='{{ asset('front/img/png/rs.png') }}'> ">381</option>
                                                    <option data-content="<span>248</span><img width='40' height='30' src='{{ asset('front/img/png/sc.png') }}'> ">248</option>
                                                    <option data-content="<span>232</span><img width='40' height='30' src='{{ asset('front/img/png/sl.png') }}'> ">232</option>
                                                    <option data-content="<span>65</span><img width='40' height='30' src='{{ asset('front/img/png/sg.png') }}'> ">65</option>
                                                    <option data-content="<span>421</span><img width='40' height='30' src='{{ asset('front/img/png/sk.png') }}'> ">421</option>
                                                    <option data-content="<span>84</span><img width='40' height='30' src='{{ asset('front/img/png/vn.png') }}'> ">84</option>
                                                    <option data-content="<span>386</span><img width='40' height='30' src='{{ asset('front/img/png/si.png') }}'> ">386</option>
                                                    <option data-content="<span>252</span><img width='40' height='30' src='{{ asset('front/img/png/so.png') }}'> ">252</option>
                                                    <option data-content="<span>27</span><img width='40' height='30' src='{{ asset('front/img/png/za.png') }}'> ">27</option>
                                                    <option data-content="<span>263</span><img width='40' height='30' src='{{ asset('front/img/png/zw.png') }}'> ">263</option>
                                                    <option data-content="<span>34</span><img width='40' height='30' src='{{ asset('front/img/png/es.png') }}'> ">34</option>
                                                    <option data-content="<span>211</span><img width='40' height='30' src='{{ asset('front/img/png/ss.png') }}'> ">211</option>
                                                    <option data-content="<span>249</span><img width='40' height='30' src='{{ asset('front/img/png/sd.png') }}'> ">249</option>
                                                    <option data-content="<span>212</span><img width='40' height='30' src='{{ asset('front/img/png/eh.png') }}'> ">212</option>
                                                    <option data-content="<span>597</span><img width='40' height='30' src='{{ asset('front/img/png/sr.png') }}'> ">597</option>
                                                    <option data-content="<span>47</span><img width='40' height='30' src='{{ asset('front/img/png/sj.png') }}'> ">47</option>
                                                    <option data-content="<span>268</span><img width='40' height='30' src='{{ asset('front/img/png/sz.png') }}'> ">268</option>
                                                    <option data-content="<span>46</span><img width='40' height='30' src='{{ asset('front/img/png/se.png') }}'> ">46</option>
                                                    <option data-content="<span>41</span><img width='40' height='30' src='{{ asset('front/img/png/ch.png') }}'> ">41</option>
                                                    <option data-content="<span>963</span><img width='40' height='30' src='{{ asset('front/img/png/sy.png') }}'> ">963</option>
                                                    <option data-content="<span>992</span><img width='40' height='30' src='{{ asset('front/img/png/tj.png') }}'> ">992</option>
                                                    <option data-content="<span>66</span><img width='40' height='30' src='{{ asset('front/img/png/th.png') }}'> ">66</option>
                                                    <option data-content="<span>228</span><img width='40' height='30' src='{{ asset('front/img/png/tg.png') }}'> ">228</option>
                                                    <option data-content="<span>690</span><img width='40' height='30' src='{{ asset('front/img/png/tk.png') }}'> ">690</option>
                                                    <option data-content="<span>676</span><img width='40' height='30' src='{{ asset('front/img/png/to.png') }}'> ">676</option>
                                                    <option data-content="<span>+1-868</span><img width='40' height='30' src='{{ asset('front/img/png/tt.png') }}'> ">+1-868</option>
                                                    <option data-content="<span>971</span><img width='40' height='30' src='{{ asset('front/img/png/ae.png') }}'> ">971</option>
                                                    <option data-content="<span>216</span><img width='40' height='30' src='{{ asset('front/img/png/tn.png') }}'> ">216</option>
                                                    <option data-content="<span>90</span><img width='40' height='30' src='{{ asset('front/img/png/tr.png') }}'> ">90</option>
                                                    <option data-content="<span>993</span><img width='40' height='30' src='{{ asset('front/img/png/tm.png') }}'> ">993</option>
                                                    <option data-content="<span>+1-649</span><img width='40' height='30' src='{{ asset('front/img/png/tc.png') }}'> ">+1-649</option>
                                                    <option data-content="<span>688</span><img width='40' height='30' src='{{ asset('front/img/png/tv.png') }}'> ">688</option>
                                                    <option data-content="<span>256</span><img width='40' height='30' src='{{ asset('front/img/png/ug.png') }}'> ">256</option>
                                                    <option data-content="<span>380</span><img width='40' height='30' src='{{ asset('front/img/png/ua.png') }}'> ">380</option>
                                                    <option data-content="<span>389</span><img width='40' height='30' src='{{ asset('front/img/png/mk.png') }}'> ">389</option>
                                                    <option data-content="<span>20</span><img width='40' height='30' src='{{ asset('front/img/png/eg.png') }}'> ">20</option>
                                                    <option data-content="<span>44</span><img width='40' height='30' src='{{ asset('front/img/png/gb.png') }}'> ">44</option>
                                                    <option data-content="<span>+44-1481</span><img width='40' height='30' src='{{ asset('front/img/png/gg.png') }}'> ">+44-1481</option>
                                                    <option data-content="<span>+44-1534</span><img width='40' height='30' src='{{ asset('front/img/png/je.png') }}'> ">+44-1534</option>
                                                    <option data-content="<span>+44-1624</span><img width='40' height='30' src='{{ asset('front/img/png/im.png') }}'> ">+44-1624</option>
                                                    <option data-content="<span>255</span><img width='40' height='30' src='{{ asset('front/img/png/tz.png') }}'> ">255</option>
                                                    <option data-content="<span>1</span><img width='40' height='30' src='{{ asset('front/img/png/us.png') }}'> ">1</option>
                                                    <option data-content="<span>+1-340</span><img width='40' height='30' src='{{ asset('front/img/png/vi.png') }}'> ">+1-340</option>
                                                    <option data-content="<span>226</span><img width='40' height='30' src='{{ asset('front/img/png/bf.png') }}'> ">226</option>
                                                    <option data-content="<span>598</span><img width='40' height='30' src='{{ asset('front/img/png/uy.png') }}'> ">598</option>
                                                    <option data-content="<span>998</span><img width='40' height='30' src='{{ asset('front/img/png/uz.png') }}'> ">998</option>
                                                    <option data-content="<span>58</span><img width='40' height='30' src='{{ asset('front/img/png/ve.png') }}'> ">58</option>
                                                    <option data-content="<span>681</span><img width='40' height='30' src='{{ asset('front/img/png/wf.png') }}'> ">681</option>
                                                    <option data-content="<span>685</span><img width='40' height='30' src='{{ asset('front/img/png/ws.png') }}'> ">685</option>
                                                    <option data-content="<span>967</span><img width='40' height='30' src='{{ asset('front/img/png/ye.png') }}'> ">967</option>
                                                    <option data-content="<span>260</span><img width='40' height='30' src='{{ asset('front/img/png/zm.png') }}'> ">260</option>
                                                </select>
                                            </div>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="@error('message') is-invalid @enderror form-control p-3" rows="5" placeholder="{{ __('site.message') }}">{{ old('message') }}</textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-hover">{{ __('site.send') }}<i class="icon-left-arrow pr-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
