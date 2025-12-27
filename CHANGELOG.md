# CHANGELOG

## [5.9.0](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/compare/v5.8.2...v5.9.0) (2025-12-27)


### Features

* [5.x] attribute consistency ([#2368](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2368)) ([b2eea4f](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b2eea4f9716be1e2664359231af1558172d7c59f))
* [5.x] drop symfony 5.4 ([#2424](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2424)) ([bbf11aa](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/bbf11aac0f751a0e23e79e98eb831cef615d17d4))
* [5.x] php minimum to 8.1 ([#2362](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2362)) ([1461fc7](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/1461fc722aa7ef414232c7749502b0271f337708))
* **#2212:** support type info component ([#2349](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2349)) ([86d1a11](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/86d1a110eef76566931be969c3a6651c1f94629d))
* **#2297:** (Symfony 7.1) Add MapRequestPayload array parameter handling ([#2298](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2298)) ([684391a](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/684391a5fab4bdfac752560d3483d0f7109448a5))
* **#2485:** Configure operationId generation method ([#2489](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2489)) ([a36e86e](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/a36e86e8764e37078e9c0799756dfd454c3b423a))
* **#2486:** properly describe multiple file upload ([#2511](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2511)) ([49098f9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/49098f9e3f5e7a466b95b1d108d45857ba533c96))
* **#2502:** refactor `Model::$type` from property-info to type-info `Type` ([ef14213](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ef14213ec74aa2ca3580465364a6768b21b6827c))
* **2056:** support opt out of JMS serializer usage ([#2342](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2342)) ([322c47b](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/322c47b9fa3c5913ec9bbeba537a32407151be73))
* 4.x annotation to attribute migration 5.x ([#2369](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2369)) ([c0a4aee](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c0a4aee62325be5a2ba101b53ac255bfb2069cc2))
* 5.x drop annotations ([#2363](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2363)) ([d8e9e29](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/d8e9e293e1adab7e6289d38c26d42b238d1add4e))
* Add ability to configure UI through configuration ([#2251](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2251)) ([5669b8f](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/5669b8f7be32af1167243ae274814237008f7084))
* add arrays of enums and enum callbacks for query params ([#2096](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2096)) ([d590880](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/d590880facfe7158d681b5d9c93b8b27a06f26cb))
* add possibility to ignore properties from schema ([#2416](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2416)) ([03ea751](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/03ea751ca7cbc6674fa31a4135a7730c639222c5))
* add support for name based serialisation of JMS enums ([#2355](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2355)) ([82c6066](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/82c6066311356b683ca4142b518878935d533b13))
* add support for name based serialisation of JMS enums ([#2355](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2355)) ([9ee5f58](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/9ee5f586213fc77c9adc56bd59cc9229a9da2527))
* add support for Symfony's TranslatableInterface ([#2472](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2472)) ([6042983](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/60429836bab244d3c92f37b1c329af89aafd786f))
* added symfony/uuid property describer ([#2098](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2098)) ([221a1fe](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/221a1febaf861435b51c80cffd1a78efb4168345))
* apply rule ReturnTypeFromReturnDirectArrayRector from rector ([#2292](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2292)) ([c20a32e](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c20a32ea35fad19deb23a8a19b77e47e9765f571))
* apply rule TypedPropertyFromStrictConstructor from rector ([#2283](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2283)) ([2d45e53](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2d45e536b0005bdc7607d71716ec453d11677cbf))
* create top level Tag from Tag annotations ([#2334](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2334)) ([4e66705](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/4e667050c8b8248bd680e3ca06c573c730937605))
* **dependencies:** [#1913](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/1913) - upgrade symfony 60 dependencies ([2ade72d](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2ade72d0aae64d94024745802a9fb85cf498d6c8))
* generate security documentation ([#2445](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2445)) ([f48d9cb](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/f48d9cb3930a34df209547ffd86db01254d5fce8))
* Implement Ulid type description in ClassDescriber ([#2556](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2556)) ([5666ba1](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/5666ba1e5646fedc28b410cc97e0ab1a3d4ef413))
* migration path for with_annotation to with_attribute ([#2430](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2430)) ([3aaa734](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/3aaa7341473c6138bbfff7c7e3a45ccc6d79c65e))
* **Model:** Allow customizing the name of generated schemas. ([#2542](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2542)) ([6a12188](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/6a121885ab53034cd86539f8ec6362a8717df218))
* **ModelRegistry:** schemas deduplication now compare generated schemas to reduce automatically named schemas ([#2461](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2461)) ([729f9d4](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/729f9d4c07f364d2dc2c174aa0ca80f123e8c3f4))
* pass serialization context to name converter ([#2167](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2167)) ([c55d9ef](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c55d9ef7852fcfe8c1b1263ea33990de6a54de7a))
* sort processors by priority ([#2196](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2196)) ([c16f6fe](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c16f6fe0f897548ae64097201fec93f407b4d2b3))
* stoplight as an UI option ([#2443](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2443)) ([c55c47c](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c55c47c6e586e0d499e7ddafe16681976016949d))
* support configuring all params in alternative name models ([#2345](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2345)) ([958bbcd](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/958bbcd482788a77f34b88a7acdf5720d93e5900))
* Support for generic types ([#2503](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2503)) ([ce64341](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ce6434107ccb57d0686e25ae6c7767c75a3c6e4e))
* support multiple authorisations to be stored and restored ([#2311](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2311)) ([be67a3a](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/be67a3a61fb2a16b36a741ec83ff3dc93d36d68a))
* symfony 7 support ([#2164](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2164)) ([634a16b](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/634a16b0482492419c086a9f176e1344a5f93bae))
* **symfony:** describe MapUploadedFile property ([#2418](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2418)) ([e373f62](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/e373f62f563af700a5614dbcc2c1330b8981c7fc))
* update swagger-ui ([#2154](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2154)) ([b7a5722](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b7a5722c4fbef6052dcc0aebe8b7b4c5b4ff49a0))


### Bug Fixes

* **#2222:** Fix properties with default values getting marked as required ([#2248](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2248)) ([7f46161](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/7f46161643e6a763f7429184b9031714d74a9745))
* **#2291:** symfony 7.1 - deprecation Symfony\Component\HttpKernel\DependencyInjection\Extension ([#2312](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2312)) ([4f3c4f2](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/4f3c4f2e78689d836d8356eba244ba3c4636bacc))
* **#2300:** fix missing context param UuidPropertyDescriber::describe() ([#2302](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2302)) ([8f43de5](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/8f43de555b5156cc3ee6a28427b675c7c927ce54))
* **#2336:** keep original index key ([#2337](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2337)) ([61a3f8b](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/61a3f8bb95111fade6eace55c071c43da0cc75d9))
* **#2480:** Tag ignored on subclasses when routes are inherited from abstract controller ([#2492](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2492)) ([d7718d2](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/d7718d2a5345105f24712eba677a2310a826e592))
* **#2509:** fatal reflection error when controller class doesn't exist ([#2510](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2510)) ([75693b3](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/75693b3d1c4cad448f4bdf2c02a8879d9ae3370e))
* **2324:** remove ProcessorInterface usage ([#2332](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2332)) ([fbb94eb](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/fbb94ebc33116fd10a67579c6eb970ff3c3ec067))
* add missing trigger_deprecation calls to deprecated classes, methods ([#2265](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2265)) ([9587aa7](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/9587aa743bb71314e9648c6ae92eab5296ba6ef2))
* attribute validation groups not passed ([#2189](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2189)) ([2360674](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2360674a7bd8bbf5fb834b08e89662b6ad851618))
* before implementation with custom processors ([#2421](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2421)) ([e44364d](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/e44364dcc321a26e60d6222555a55327d513ca01))
* **config:** migrate xml to php config ([#2566](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2566)) ([2b12914](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2b12914d369c4a6b85b30fcd0fc38ec1451ffcad))
* **configuration:** validate `type_info` option on Symfony 6 ([#2615](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2615)) ([3d96b9a](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/3d96b9a9826a5dff52a6f58a88926dc5ef2d4b28))
* custom JMS enum type handling ([#2372](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2372)) ([756785b](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/756785b1b6ce8850dbe717e92141d442129585de))
* custom JMS enum type handling ([#2372](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2372)) ([1e283ef](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/1e283ef3ddd6bdaccd95be51dfcb92fdc3d36aa0))
* deprecation warning for usage of "tagged" ([#2429](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2429)) ([f320ae4](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/f320ae4709ac5394ca8d8916aeb261385d0f927e))
* describe nullable enums with allOf ([#2178](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2178)) ([23d157c](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/23d157c02c505e4592ca134b91d22ab35584458c))
* different context uses same model ([#2183](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2183)) ([31da761](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/31da761b6c9d275fb3bbee87c4c6888b17aec4ad))
* do not escape slashes ([#2157](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2157)) ([83e7fdd](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/83e7fdde88181331d5c5795f7b74976b972be981))
* Generate operationids properly ([#2266](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2266)) ([2d0f12d](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2d0f12d7495286350a72d451d9c19b3838dc5564))
* incorrect directory used for updated swagger-ui ([#2379](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2379)) ([1f0cdf0](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/1f0cdf0961fc1ce89eefb963c6067673d6cb4476))
* incorrect directory used for updated swagger-ui ([#2379](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2379)) ([9d74fa9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/9d74fa9874b9f9b13b2fa4f6eb38082c2405c33b))
* incorrect script destination ([#2380](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2380)) ([c3078ba](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c3078bae68e7571901b73c733a55ef154c32ed3d))
* incorrect script destination ([#2380](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2380)) ([f981465](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/f981465a888c720a8280fc4f1645f636e385b39a))
* invalid nullable enums with OAS 3.1 version ([f98641d](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/f98641dee93295fbc55c9799699a34254fde0fac))
* **MapQueryParameter:** convert pcre regex to ecma ([#2435](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2435)) ([5298309](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/52983094ec20c33ead8b9a3d20a32445a0f9cef3))
* mark PropertyDescribers with [@final](https://github.com/final) ([#2425](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2425)) ([3b3a978](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/3b3a97820ad2139fda3b1cdab4a5c38dda7c2281))
* missing tab in doc ([#2455](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2455)) ([1b18870](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/1b18870d09329a03331f0fa211d81f64c9bbc706))
* **ModelRegistry:** ensure first registered alternative name is used ([#2553](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2553)) ([2f3b3b7](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2f3b3b778d132f5b33f3d09f24d44745f83606f6))
* move to processor to correct dir ([#2204](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2204)) ([008ae69](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/008ae69267fbf1cc5b25fbf29597790b42a03c45))
* override code based defaults with explicit ones ([#2377](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2377)) ([32676fe](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/32676feeeab312dbc48eeb7f3274da0da7b0c276))
* override code based defaults with explicit ones ([#2377](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2377)) ([84c7916](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/84c79161f070e380e0f4d0dfcd2e949146e627c5))
* pass configured openapi version to swagger-php ([#2159](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2159)) ([b415300](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b4153009220948da67af9b25e4fc04abf3765942))
* pass through serializationContext into models where possible ([#2344](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2344)) ([cb2d65d](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/cb2d65da1cd1e309e7ac6d843652a5df38070353))
* remove unused `TypesTrait` ([#2588](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2588)) ([438894c](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/438894c987e2126c335d3fff86a099f097b6673f))
* set nullable true when default value is null ([#2390](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2390)) ([8e56941](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/8e5694150fb0f7acfeff437ce14d1fd3bb3292ca))
* **SplObjectStorage:** `SplObjectStorage::detach()` is deprecated since `8.5`, use method `SplObjectStorage::offsetUnset()` instead ([94f6895](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/94f6895bb4409b7404c9fe7e1b88ae426e8c310a))
* stoplight ui height ([#2444](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2444)) ([1497977](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/1497977f82d396f1dda8120434c6d29f3de683e6))
* swagger-php 5.7.0 compatatiblity ([#2598](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2598)) ([ca4ca49](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ca4ca49ef60de67bac03f73554b8f8fb9b9636b2))
* **swagger-php:** conflict with broken version 5.5.0 ([#2568](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2568)) ([a9bbfa7](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/a9bbfa79c4572def8b791f936bb63e126f672ba4))
* **SymfonyConstraintAnnotationReader:** disallow null if NotNull attribute is present ([#2329](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2329)) ([ddeb3d4](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ddeb3d4e5af37ba7e7d9fcb7782a454d8df68d23))
* **trigger_deprecation:** incorrect & missing trigger_deprecation in `Model` class ([#2613](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2613)) ([52858e6](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/52858e67fc702eb5eae3c0c4241d46f49534b6c9))
* typo in documentation ([#2504](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2504)) ([0bd729b](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/0bd729b700efa138e8c13af3dc242d82852f3230))
* Unknown Constraint class when not using symfony/validator ([#2276](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2276)) ([2af8c5d](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2af8c5d55d48c488ef1a650b9ef7133e3c583623))
* updated swagger-ui to v5.18.1 ([#2378](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2378)) ([ea1c676](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ea1c676994baf851fe3515f2ce773711ed0902ee))
* updated swagger-ui to v5.18.1 ([#2378](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2378)) ([b79abc1](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b79abc1ddd56d7d505c04fb04cc74b53511ee282))
* use iterable check instead of array ([#2239](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2239)) ([a15b592](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/a15b5923602c669007ea53a1a87991e9e147daab))
* use oneOf instead of allOf ([#2156](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2156)) ([d8a9b66](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/d8a9b662612595bb5ae14d07fab39203fe5696a2))
* version number in triggered deprecation ([#2577](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2577)) ([b5f440c](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b5f440c8accd069a9a279e3e5a1e1b48824637d3))


### Reverts

* "Support php7.4 nullable typed properties for JMS serializer." ([#2325](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2325)) ([c952390](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c9523906023e61351f03dbab8d077173f5ec4883))
* bring back schema to interface ([#2360](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2360)) ([748c6e0](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/748c6e0564688b6dcd0fdb5f73fd5497bbd471f8))


### Miscellaneous Chores

* [5.x] remove deprecations ([#2388](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2388)) ([abd21f3](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/abd21f3025ef1a4908d8a674296c26d37986b63e))
* **#2484:** remove ext-json ([#2488](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2488)) ([b29f632](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b29f632cbc9d498efc8b7142bcf32f81a26e05eb))
* **5.x:** release 5.5.1 ([#2536](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2536)) ([c7797a9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c7797a9615ba7fea21a9043d1537d84782a00039))
* **5.x:** release 5.6.0 ([#2545](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2545)) ([7bf5380](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/7bf53803978503ed912e9025c98eaa180bf350c6))
* **5.x:** release 5.6.1 ([#2549](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2549)) ([0b8b603](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/0b8b6031c28af2999656488da7e1fec791a2f983))
* **5.x:** release 5.6.2 ([#2555](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2555)) ([9b7ece3](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/9b7ece3141b74699008be55231d6907b5e8bc883))
* **5.x:** release 5.6.3 ([#2562](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2562)) ([8b1cb33](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/8b1cb3384c056e6da303e6e00d2b41cf831b5bfa))
* **5.x:** release 5.6.4 ([#2567](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2567)) ([213eba9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/213eba9594673ac7326799254f0ea82ec2db9bae))
* **5.x:** release 5.6.5 ([#2576](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2576)) ([eb04536](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/eb0453607560e63bbbc6a746978933f77a787575))
* **5.x:** release 5.7.0 ([#2589](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2589)) ([2a79732](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2a79732f8d10a5a0faf3934d906ac9e4c720aa2f))
* **5.x:** release 5.7.1 ([#2600](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2600)) ([772d26a](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/772d26a9d940c9a8d173f75f0fdbaab47c1c87f2))
* **5.x:** release 5.8.0 ([#2609](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2609)) ([f8f18b4](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/f8f18b4f758464e5bbf7825dad455741557cf5a8))
* **5.x:** release 5.8.1 ([#2616](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2616)) ([16e139b](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/16e139b812320dc33c971dc21627068fcc1ed34c))
* **5.x:** release 5.8.2 ([#2626](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2626)) ([b29ed29](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b29ed29a460cc25dab91c2eb6a4f22fd4f31dd37))
* allow zircote/swagger-php v5 ([#2420](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2420)) ([a2497e1](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/a2497e108281f28f2d79a9ddc2d1795e6c2777e9))
* bump symfony 6.0 to 6.4 ([#2299](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2299)) ([76bddcb](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/76bddcb40d40aae1dbe3f011d344fde32f968409))
* bump symfony 7.x minimum to 7.1 ([#2419](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2419)) ([ff91395](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ff9139576376695d2c3febc23a5e7eab91866d83))
* cleanup Areas annotation ([#2431](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2431)) ([cdc855e](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/cdc855ef8e6a811336c3a6c72fe99fbe13a78e37))
* dependabot for composer ([#2457](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2457)) ([26502ce](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/26502ce922619efd714b041cf3847afc342d92a3))
* **deps:** bump @stoplight/elements from 9.0.0 to 9.0.1 in /utils ([#2471](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2471)) ([9380be8](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/9380be885654985ca453af2347ea9a8e62716c4d))
* **deps:** bump @stoplight/elements from 9.0.1 to 9.0.6 in /utils ([#2523](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2523)) ([752cde9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/752cde953dc09086a397b241bbd72853c149ce0a))
* **deps:** bump @stoplight/elements from 9.0.11 to 9.0.12 in /utils ([#2625](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2625)) ([e54c6c2](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/e54c6c2987b7349dfd7e14fc9d7b8e65afb9905d))
* **deps:** bump @stoplight/elements from 9.0.12 to 9.0.13 in /utils ([#2648](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2648)) ([57d40e3](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/57d40e30ca754e4531bcc922a984abd872baf64c))
* **deps:** bump @stoplight/elements from 9.0.6 to 9.0.8 in /utils ([#2559](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2559)) ([ab71920](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ab7192081e4764694ae50d61246461b1d885ddcb))
* **deps:** bump @stoplight/elements from 9.0.8 to 9.0.11 in /utils ([#2585](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2585)) ([ac85a09](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ac85a09cb8945efdc48a255fa9749fadfbcb2e05))
* **deps:** bump codecov/codecov-action from 4 to 5 ([#2400](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2400)) ([e9be0ec](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/e9be0ec7d3ba0effea75327e2b61217100e0611e))
* **deps:** bump redoc from 2.0.0 to 2.2.0 in /utils ([#2383](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2383)) ([eded260](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/eded2607eb131f37ebf2d63518b3bb35c7d59b2d))
* **deps:** bump redoc from 2.0.0 to 2.2.0 in /utils ([#2383](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2383)) ([2384711](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2384711daffaf01ab30d14743a5ce3422bbe8246))
* **deps:** bump redoc from 2.2.0 to 2.4.0 in /utils ([#2442](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2442)) ([8b3accb](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/8b3accb25d87869ee6be36bebebae53c72f15e16))
* **deps:** bump redoc from 2.4.0 to 2.5.0 in /utils ([#2477](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2477)) ([a09898a](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/a09898ad125a455615db0ccf9962784d5ae52cb4))
* **deps:** bump redoc from 2.5.0 to 2.5.1 in /utils ([#2557](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2557)) ([552e1df](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/552e1df377d778ba1ec9b41c44bbf4cf9f1102fc))
* **deps:** bump redoc from 2.5.1 to 2.5.2 in /utils ([#2574](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2574)) ([2b49d55](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2b49d559937be8c1590b3c927a6f6ad50c116bd1))
* **deps:** bump stefanzweifel/git-auto-commit-action from 4 to 5 ([#2382](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2382)) ([d6fc080](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/d6fc080c2304f1c6112ca6e9bf325f3d8d8dd631))
* **deps:** bump stefanzweifel/git-auto-commit-action from 4 to 5 ([#2382](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2382)) ([46affd6](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/46affd66301407b7607129b51f101e7cae3fe203))
* **deps:** bump stefanzweifel/git-auto-commit-action from 5 to 6 ([#2500](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2500)) ([bac8199](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/bac81991c3061f94022952cd6f3180162bfbb8ec))
* **deps:** bump swagger-ui-dist from 5.18.1 to 5.18.2 in /utils ([#2384](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2384)) ([e259494](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/e2594949d325f2dbd6dff8729e440f251768243c))
* **deps:** bump swagger-ui-dist from 5.18.1 to 5.18.2 in /utils ([#2384](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2384)) ([170f062](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/170f062e7cc7f98a285fa16dae5485f14dccc76d))
* **deps:** bump swagger-ui-dist from 5.18.2 to 5.18.3 in /utils ([#2438](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2438)) ([a482abd](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/a482abdcac37d6238819a99dd84250963f0cb442))
* **deps:** bump swagger-ui-dist from 5.18.3 to 5.20.0 in /utils ([#2449](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2449)) ([99429c9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/99429c9c8bd2c50a75db0392be3a2b338564752b))
* **deps:** bump swagger-ui-dist from 5.20.0 to 5.20.1 in /utils ([#2458](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2458)) ([90151a2](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/90151a21f7d4b51715d80de322afe011d3257ebe))
* **deps:** bump swagger-ui-dist from 5.20.1 to 5.21.0 in /utils ([#2475](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2475)) ([2c3b6e4](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/2c3b6e4936c439355ec4615674ebe2962114cde0))
* **deps:** bump swagger-ui-dist from 5.21.0 to 5.25.2 in /utils ([#2506](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2506)) ([735c39e](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/735c39e7c1ebb2954af29d3d9cc9be452edcdad4))
* **deps:** bump swagger-ui-dist from 5.25.3 to 5.27.1 in /utils ([#2525](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2525)) ([804f7ab](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/804f7abe513a9ceabc0a522a76d45e6806056de2))
* **deps:** bump swagger-ui-dist from 5.27.1 to 5.28.0 in /utils ([#2538](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2538)) ([0f86e76](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/0f86e76f6a9c8e5a96f586857aaf205b7277fb79))
* **deps:** bump swagger-ui-dist from 5.28.0 to 5.28.1 in /utils ([#2548](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2548)) ([dcde65f](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/dcde65f1086f87f3f7208ca1d147063a0f12ba6a))
* **deps:** bump swagger-ui-dist from 5.28.1 to 5.29.0 in /utils ([#2554](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2554)) ([5ad97ac](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/5ad97ac8ee572cffb1071cedc757cf431af445c9))
* **deps:** bump swagger-ui-dist from 5.29.0 to 5.29.3 in /utils ([#2560](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2560)) ([9278d86](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/9278d869302f0a8d6acf1b45726be2a1efe17c5c))
* **deps:** bump swagger-ui-dist from 5.29.3 to 5.29.4 in /utils ([#2564](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2564)) ([254a487](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/254a487c4a8744aba8d59150de98ae18348a0e1e))
* **deps:** bump swagger-ui-dist from 5.29.4 to 5.29.5 in /utils ([#2575](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2575)) ([f9fd650](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/f9fd6506fbc39d47d0262aaf2f59e5615c95e0b7))
* **deps:** bump swagger-ui-dist from 5.29.5 to 5.30.2 in /utils ([#2586](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2586)) ([c37c801](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c37c8014b3ea6b4b35b053ea2d9cea0d69d29132))
* **deps:** bump swagger-ui-dist from 5.30.2 to 5.30.3 in /utils ([#2639](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2639)) ([8c804b9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/8c804b9d8b10b3717b53492b455801e04589dde3))
* **deps:** bump swagger-ui-dist from 5.30.3 to 5.31.0 in /utils ([#2655](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2655)) ([b7fb331](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/b7fb331138df50159c9e9dda6519c8f6f1575218))
* fix ci ([#2343](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2343)) ([5eda246](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/5eda246090b3721be5b0c1d08c6570b56605ac1c))
* fix ci ([#2352](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2352)) ([9b91d23](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/9b91d2376888c2dacf4192b103a7ff7f67112bf5))
* **php:** bump minimum to php 8.2 ([#2611](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2611)) ([95b2057](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/95b2057ffda1cc03b5e50788da5dae54682ac604))
* PHPStan v2 ([#2572](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2572)) ([3b0abc6](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/3b0abc6ca97d57922babffa8ed250a0d3d582e0e))
* prepare 4.30.0 release ([#2338](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2338)) ([277fa17](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/277fa17b912be31b5170e49f0924b1028058c938))
* prepare 4.32.0 ([#2347](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2347)) ([6ea7027](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/6ea702702ffb3382e9fd9776c868ff7386dbc772))
* release 5.x 🥳  ([#2433](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2433)) ([a65e1d7](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/a65e1d76502042f894d7bea5150c2e6ed49313ef))
* remove old symfony compatibility logic ([#2357](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2357)) ([3d05e0e](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/3d05e0e25702d5a2d50ad8d95154a7d2dc6e979b))
* symfony/phpunit-bridge version constraint & dependabot grouping ([#2460](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2460)) ([c39f3b9](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/c39f3b92a720c954164340c4c5bb2b4902279026))
* **symfony:** bumped minimum version for Symfony 7 from `^7.1` to `^7.2` ([ef14213](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ef14213ec74aa2ca3580465364a6768b21b6827c))
* Update README.md ([#2490](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/issues/2490)) ([ebc86ee](https://github.com/Matthew-Kilpatrick/NelmioApiDocBundle/commit/ebc86ee8a6b6931acf42e86000bd0cd3ce961c8c))

## [5.8.2](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.8.1...v5.8.2) (2025-11-28)


### Bug Fixes

* **SplObjectStorage:** `SplObjectStorage::detach()` is deprecated since `8.5`, use method `SplObjectStorage::offsetUnset()` instead ([94f6895](https://github.com/nelmio/NelmioApiDocBundle/commit/94f6895bb4409b7404c9fe7e1b88ae426e8c310a))


### Miscellaneous Chores

* **deps:** bump @stoplight/elements from 9.0.11 to 9.0.12 in /utils ([#2625](https://github.com/nelmio/NelmioApiDocBundle/issues/2625)) ([e54c6c2](https://github.com/nelmio/NelmioApiDocBundle/commit/e54c6c2987b7349dfd7e14fc9d7b8e65afb9905d))

## [5.8.1](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.8.0...v5.8.1) (2025-11-14)


### Bug Fixes

* **configuration:** validate `type_info` option on Symfony 6 ([#2615](https://github.com/nelmio/NelmioApiDocBundle/issues/2615)) ([3d96b9a](https://github.com/nelmio/NelmioApiDocBundle/commit/3d96b9a9826a5dff52a6f58a88926dc5ef2d4b28))

## [5.8.0](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.7.1...v5.8.0) (2025-11-14)


### Features

* **#2502:** refactor `Model::$type` from property-info to type-info `Type` ([ef14213](https://github.com/nelmio/NelmioApiDocBundle/commit/ef14213ec74aa2ca3580465364a6768b21b6827c))


### Bug Fixes

* **trigger_deprecation:** incorrect & missing trigger_deprecation in `Model` class ([#2613](https://github.com/nelmio/NelmioApiDocBundle/issues/2613)) ([52858e6](https://github.com/nelmio/NelmioApiDocBundle/commit/52858e67fc702eb5eae3c0c4241d46f49534b6c9))


### Miscellaneous Chores

* **php:** bump minimum to php 8.2 ([#2611](https://github.com/nelmio/NelmioApiDocBundle/issues/2611)) ([95b2057](https://github.com/nelmio/NelmioApiDocBundle/commit/95b2057ffda1cc03b5e50788da5dae54682ac604))
* **symfony:** bumped minimum version for Symfony 7 from `^7.1` to `^7.2` ([ef14213](https://github.com/nelmio/NelmioApiDocBundle/commit/ef14213ec74aa2ca3580465364a6768b21b6827c))

## [5.7.1](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.7.0...v5.7.1) (2025-11-13)


### Bug Fixes

* swagger-php 5.7.0 compatatiblity ([#2598](https://github.com/nelmio/NelmioApiDocBundle/issues/2598)) ([ca4ca49](https://github.com/nelmio/NelmioApiDocBundle/commit/ca4ca49ef60de67bac03f73554b8f8fb9b9636b2))

## [5.7.0](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.6.5...v5.7.0) (2025-11-10)


### Features

* Implement Ulid type description in ClassDescriber ([#2556](https://github.com/nelmio/NelmioApiDocBundle/issues/2556)) ([5666ba1](https://github.com/nelmio/NelmioApiDocBundle/commit/5666ba1e5646fedc28b410cc97e0ab1a3d4ef413))


### Bug Fixes

* remove unused `TypesTrait` ([#2588](https://github.com/nelmio/NelmioApiDocBundle/issues/2588)) ([438894c](https://github.com/nelmio/NelmioApiDocBundle/commit/438894c987e2126c335d3fff86a099f097b6673f))


### Miscellaneous Chores

* **deps:** bump @stoplight/elements from 9.0.8 to 9.0.11 in /utils ([#2585](https://github.com/nelmio/NelmioApiDocBundle/issues/2585)) ([ac85a09](https://github.com/nelmio/NelmioApiDocBundle/commit/ac85a09cb8945efdc48a255fa9749fadfbcb2e05))
* **deps:** bump swagger-ui-dist from 5.29.5 to 5.30.2 in /utils ([#2586](https://github.com/nelmio/NelmioApiDocBundle/issues/2586)) ([c37c801](https://github.com/nelmio/NelmioApiDocBundle/commit/c37c8014b3ea6b4b35b053ea2d9cea0d69d29132))

## [5.6.5](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.6.4...v5.6.5) (2025-10-20)


### Bug Fixes

* version number in triggered deprecation ([#2577](https://github.com/nelmio/NelmioApiDocBundle/issues/2577)) ([b5f440c](https://github.com/nelmio/NelmioApiDocBundle/commit/b5f440c8accd069a9a279e3e5a1e1b48824637d3))


### Miscellaneous Chores

* **deps:** bump redoc from 2.5.1 to 2.5.2 in /utils ([#2574](https://github.com/nelmio/NelmioApiDocBundle/issues/2574)) ([2b49d55](https://github.com/nelmio/NelmioApiDocBundle/commit/2b49d559937be8c1590b3c927a6f6ad50c116bd1))
* **deps:** bump swagger-ui-dist from 5.29.4 to 5.29.5 in /utils ([#2575](https://github.com/nelmio/NelmioApiDocBundle/issues/2575)) ([f9fd650](https://github.com/nelmio/NelmioApiDocBundle/commit/f9fd6506fbc39d47d0262aaf2f59e5615c95e0b7))

## [5.6.4](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.6.3...v5.6.4) (2025-10-17)


### Bug Fixes

* **config:** migrate xml to php config ([#2566](https://github.com/nelmio/NelmioApiDocBundle/issues/2566)) ([2b12914](https://github.com/nelmio/NelmioApiDocBundle/commit/2b12914d369c4a6b85b30fcd0fc38ec1451ffcad))
* **swagger-php:** conflict with broken version 5.5.0 ([#2568](https://github.com/nelmio/NelmioApiDocBundle/issues/2568)) ([a9bbfa7](https://github.com/nelmio/NelmioApiDocBundle/commit/a9bbfa79c4572def8b791f936bb63e126f672ba4))


### Miscellaneous Chores

* **deps:** bump swagger-ui-dist from 5.29.3 to 5.29.4 in /utils ([#2564](https://github.com/nelmio/NelmioApiDocBundle/issues/2564)) ([254a487](https://github.com/nelmio/NelmioApiDocBundle/commit/254a487c4a8744aba8d59150de98ae18348a0e1e))
* PHPStan v2 ([#2572](https://github.com/nelmio/NelmioApiDocBundle/issues/2572)) ([3b0abc6](https://github.com/nelmio/NelmioApiDocBundle/commit/3b0abc6ca97d57922babffa8ed250a0d3d582e0e))

## [5.6.3](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.6.2...v5.6.3) (2025-10-09)


### Miscellaneous Chores

* **deps:** bump @stoplight/elements from 9.0.6 to 9.0.8 in /utils ([#2559](https://github.com/nelmio/NelmioApiDocBundle/issues/2559)) ([ab71920](https://github.com/nelmio/NelmioApiDocBundle/commit/ab7192081e4764694ae50d61246461b1d885ddcb))
* **deps:** bump redoc from 2.5.0 to 2.5.1 in /utils ([#2557](https://github.com/nelmio/NelmioApiDocBundle/issues/2557)) ([552e1df](https://github.com/nelmio/NelmioApiDocBundle/commit/552e1df377d778ba1ec9b41c44bbf4cf9f1102fc))
* **deps:** bump swagger-ui-dist from 5.29.0 to 5.29.3 in /utils ([#2560](https://github.com/nelmio/NelmioApiDocBundle/issues/2560)) ([9278d86](https://github.com/nelmio/NelmioApiDocBundle/commit/9278d869302f0a8d6acf1b45726be2a1efe17c5c))

## [5.6.2](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.6.1...v5.6.2) (2025-09-15)


### Miscellaneous Chores

* **deps:** bump swagger-ui-dist from 5.28.1 to 5.29.0 in /utils ([#2554](https://github.com/nelmio/NelmioApiDocBundle/issues/2554)) ([5ad97ac](https://github.com/nelmio/NelmioApiDocBundle/commit/5ad97ac8ee572cffb1071cedc757cf431af445c9))

## [5.6.1](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.6.0...v5.6.1) (2025-09-10)


### Bug Fixes

* **ModelRegistry:** ensure first registered alternative name is used ([#2553](https://github.com/nelmio/NelmioApiDocBundle/issues/2553)) ([2f3b3b7](https://github.com/nelmio/NelmioApiDocBundle/commit/2f3b3b778d132f5b33f3d09f24d44745f83606f6))


### Miscellaneous Chores

* **deps:** bump swagger-ui-dist from 5.28.0 to 5.28.1 in /utils ([#2548](https://github.com/nelmio/NelmioApiDocBundle/issues/2548)) ([dcde65f](https://github.com/nelmio/NelmioApiDocBundle/commit/dcde65f1086f87f3f7208ca1d147063a0f12ba6a))

## [5.6.0](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.5.1...v5.6.0) (2025-09-03)


### Features

* **Model:** Allow customizing the name of generated schemas. ([#2542](https://github.com/nelmio/NelmioApiDocBundle/issues/2542)) ([6a12188](https://github.com/nelmio/NelmioApiDocBundle/commit/6a121885ab53034cd86539f8ec6362a8717df218))

## [5.5.1](https://github.com/nelmio/NelmioApiDocBundle/compare/v5.5.0...v5.5.1) (2025-09-01)


### Miscellaneous Chores

* **deps:** bump swagger-ui-dist from 5.27.1 to 5.28.0 in /utils ([#2538](https://github.com/nelmio/NelmioApiDocBundle/issues/2538)) ([0f86e76](https://github.com/nelmio/NelmioApiDocBundle/commit/0f86e76f6a9c8e5a96f586857aaf205b7277fb79))

## 5.5.0
* Schemas deduplication now compare generated schemas to reduce automatically named schemas (Entity / Entity2 / Entity3 / ...).
* Added support for generic types describing

## 5.3.0
Added support for Symfony's `TranslatableInterface`

## 5.2.1
Fixed a bug where using abstract controllers would ignore various attributes like ``#[OA\Tag]`` & ``#[Security]`` on child classes

## 5.2.0
Made it possible to automatically generate security definitions based on the ``#[IsGranted]`` attribute.

```yaml
nelmio_api_doc:
    # ...

    areas:
        default:
            security:
                MyBearerScheme:
                    type: 'http'
                    scheme: 'bearer'
```

## 5.1.0
Made it possible to configure how operation ids are generated. 

```yaml
nelmio_api_doc:
    operation_id_generation: always_prepend
```

Possible values: ``always_prepend``, ``conditionally_prepend``, ``no_prepend`` or enum instance of ``Nelmio\ApiDocBundle\Describer\OperationIdGeneration``

## 4.38.2
- Support of attribute MapQueryParameter with a regexp has been improved, it now converts the regexp from PCRE to ECMA-262 for better compliance with OpenApi. 

## 4.38.0
* Added a `#[Ignore]` attribute that allows a property to be excluded from the generated schema.
```php
<?php

use Nelmio\ApiDocBundle\Attribute\Ignore;

class Foo
{
    #[Ignore]
    private string $ignoredProperty;
}
```
* Added support for the `#[MapUploadedFile]` symfony controller argument attribute

## 4.37.0
* Added Stoplight as an alternative UI option. https://stoplight.io/open-source/elements.

## 4.36.1
- Passing an array key `value` with a list of strings to the `Areas` annotation/attribute is deprecated. Pass the list of strings directly.
```diff
-#[Areas(properties: ['value' => ['foo', 'bar']])]
+#[Areas(properties: ['foo', 'bar'])]

-#[Areas(['value' => ['foo', 'bar']])]
+#[Areas(['foo', 'bar'])]
```

## 4.36.0
* Configuration option `with_annotation` has been deprecated in favor of `with_attribute`
```diff
nelmio_api_doc:
    areas:
        path_patterns:
            - ^/api/foo
-       with_annotation: true
+       with_attribute: true
```

## 4.35.0
* Added support for the symfony/type-info component
```yaml
nelmio_api_doc:
  type_info: true
```

## 4.34.0
* Changed minimum Symfony version for 7.x from 7.0 to 7.1

## 4.33.6
* Fixed Symfony 7.2 deprecation of tagged arguments

## 4.33.5
* Added new optional parameter `$context` to` PropertyDescriberInterface::supports()`

## 4.33.4
* Deprecated `null` type from `$options` in `Nelmio\ApiDocBundle\Attribute\Model::__construct()`. Pass an empty array (`[]`) instead.
* Deprecated `null` type from `$options` in `NNelmio\ApiDocBundle\Attribute\Model::__construct()`. Pass an empty array (`[]`) instead.

## 4.33.3
* Bumped swagger-ui files from `5.18.1` to `5.18.2`
* Bumped redoc files to `2.2.0`

## 4.33.2
* Fixed incorrect directory updated for swagger-ui files from version `4.33.2`

## 4.33.1
* Bumped swagger-ui files to `5.18.1`
* Fixed explicitly set default values defined in `#[OA\Property]` being overwritten

## 4.33.0
* Fixed custom JMS enum type handling
* Added support for name based serialisation of JMS enums

## 4.32.3

* Deprecated `Nelmio\ApiDocBundle\Annotation` namespace in favor of `Nelmio\ApiDocBundle\Attribute` namespace in preparation for 5.x. Consider upgrading to the new attribute syntax.
```diff 
- use Nelmio\ApiDocBundle\Annotation\Areas;
- use Nelmio\ApiDocBundle\Annotation\Model;
- use Nelmio\ApiDocBundle\Annotation\Operation;
- use Nelmio\ApiDocBundle\Annotation\Security;

+ use Nelmio\ApiDocBundle\Attribute\Areas;
+ use Nelmio\ApiDocBundle\Attribute\Model;
+ use Nelmio\ApiDocBundle\Attribute\Operation;
+ use Nelmio\ApiDocBundle\Attribute\Security;
```


## 4.32.0

* Added support to configure `options` and `serializationContext` via `nelmio_api_doc.models.names`.
* Fixed `serializationContext` not being applied to nested models.

## 4.31.0

* Added support to opt out of JMS serializer usage per endpoint by setting `useJms` in the serializationContext.
  ```php
  #[OA\Response(response: 200, content: new Model(type: UserDto::class, serializationContext: ["useJms" => false]))]
  ```

## 4.30.0
* Create top level OpenApi Tag from Tags top level annotations/attributes

## 4.25.3

* Calling `DocumentationExtension::getExtendedType()` has been deprecated in favor of `DocumentationExtension::getExtendedTypes()` to align with the deprecation introduced with `symfony/symfony` version `4.2`.


## 4.26.0

* Add ability to configure UI through configuration
```yaml
nelmio_api_doc:
  html_config:
    assets_mode: bundle
    redocly_config:
      expandResponses: '200,201'
      hideDownloadButton: true
    swagger_ui_config:
      deepLinking: true
```

## 4.25.0

* Added support for [JMS @Discriminator](https://jmsyst.com/libs/serializer/master/reference/annotations#discriminator) annotation/attribute
  ```php
  #[\JMS\Serializer\Annotation\Discriminator(field: 'type', map: ['car' => Car::class, 'plane' => Plane::class])]
  abstract class Vehicle { }
  class Car extends Vehicle { }
  class Plane extends Vehicle { }
  ```

## 4.24.0

* Added support for some integer ranges (https://phpstan.org/writing-php-code/phpdoc-types#integer-ranges).  
  Annotations attached to integer properties like:
  ```php
    /**
     * @var int<6, 11>
     * @var int<min, 11>
     * @var int<6, max>
     * @var positive-int
     * @var negative-int
     */
  ```
  will be interpreted as appropriate `minimum` and `maximum` properties in the generated OpenAPI specification.

### Minor breaking change
Dropped support for PHP 7.2 and PHP 7.3. PHP 7.4 is the minimum required version now.

## 4.23.0

* Cache configuration option `nelmio_api_doc.cache.item_id` now automatically gets the area appended.
  ```yml
  nelmio_api_doc:
      cache:
          pool: app.cache
          item_id: nelmio_api_doc.docs
      areas:
          default: 
              ...
          area1:   
              ...
  ```
  Result in cache keys: `nelmio_api_doc.docs.default` & `nelmio_api_doc.docs.area1` to be used respectively.
* Added cache configuration option per area.
  ```yml
  nelmio_api_doc:
      areas:
          default: # Manual cache configuration
              cache:
                  pool: app.cache
                  item_id: nelmio_api_doc.docs.default
              ...
          area1:   
              cache:
                  pool: app.cache
                  item_id: nelmio_api_doc.docs.area1
              ...
  ```
  Non-configured options will be inherited from `nelmio_api_doc.cache`.
* Fixed vendor extensions (`x-*`) from configuration not being outputted in the generated specification.
  ```yml
  nelmio_api_doc:
      documentation:
          info:
              title: 'My API'
              description: 'My API description'
              x-foo: 'bar'
  ```
  Now results in JSON specification:
  ```json
  {
    ...
    "info": {
      "title": "API",
      "version": "1.0",
      "x-foo": "bar"
    },
    ...
  }
  ```
* Updated nullable enum handling to align with the behaviour of other object types. It now uses wraps nullable enums with `oneOf` instead of `allOf`.

## 4.22.0

* Updated bundle directory structure to recommended file structure as described in https://symfony.com/doc/7.0/bundles/best_practices.html.

  It might be necessary to reinstall the assets:
  ```bash
    bin/console assets:install
  ```

### Breaking change
If your codebase mentions a file or directory by path then an update to this path is necessary. For example to following configuration:
```yaml
doc-api:
    resource: "@NelmioApiDocBundle/Resources/config/routing/swaggerui.xml"
    prefix: /api/doc
```
Becomes:
```yaml
doc-api:
    resource: "@NelmioApiDocBundle/config/routing/swaggerui.xml"
    prefix: /api/doc
```

## 4.21.0

* Added bundle configuration options `nelmio_api_doc.cache.pool` and `nelmio_api_doc.cache.item_id`.
  ```yml
  nelmio_api_doc:
      cache:
          pool: app.cache
          item_id: nelmio_api_doc.docs
  ```
  
## 4.20.0

* Added Redocly as an alternative to Swagger UI. https://github.com/Redocly/redoc.
* Added support for describing dictionary types in OpenAPI 3.0.

## 4.17.0

* Passing groups to `PropertyDescriberInterface::describe()` via the `$groups` parameter is deprecated, the parameter will get removed in a future version. Pass groups via `$context['groups']` instead.


## 4.0.0

* Added support of OpenAPI 3.0. The internals were completely reworked and this version introduces BC breaks.

## 3.7.0


* Added `@SerializedName` annotation support and name converters when using Symfony >= 4.2.
* Removed pattern added from the Expression Violation message.
* Added FOSRestBundle 3.x support
* Added `@SWG` annotations support at methods level in models

## 3.3.0


* Usage of Google Fonts was removed. System fonts `serif` / `sans` will be used instead.
  This can lead to a different look on different operating systems.
  You can [re-add Google Fonts again manually by overriding the template](https://symfony.com/doc/current/bundles/NelmioApiDocBundle/faq.html#re-add-google-fonts).

* The Twig template for the Swagger UI now contains blocks to make it easier to overwrite certain parts.
  See the [official documentation](https://symfony.com/doc/current/bundles/NelmioApiDocBundle/customization.html) how to do this.

## 3.2.0 (2018-03-24)

* Add a documentation form extension. Use the ``documentation`` option to define how a form field is documented.
* Allow references to config definitions in controllers.
* Using `@Model` implicitly in `@SWG\Schema`, `@SWG\Items` and `@SWG\Property` is deprecated. Use `ref=@Model()` instead.

  Before:
  ```php
  /**
   * This was considered as an array of models.
   *
   * @SWG\Property(@Model(type=FooClass::class))
   */
  ```

  After:
  ```php
  /**
   * For an individual object:
   * @SWG\Property(ref=@Model(type=FooClass::class))
   *
   * For an array:
   * @SWG\Property(type="array", @SWG\Items(ref=@Model(type=FooClass::class)))
   */
  ```

Config
* `nelmio_api_doc.areas` added support to filter by host patterns.

  ```yml
  nelmio_api_doc:
      areas: [ host_patterns: [ ^api\. ] ]
  ```

* Added dependency for "symfony/options-resolver:^3.4.4|^4.0"

## 3.1.0 (2018-01-28)

* Added Symfony Validator constraints support

Symfony Forms
* Support for boolean checkbox
* Support for integer

JMS Serializer
* Support JMS `int` (alias for `integer`)
* Also process phpdoc annotations

SwaggerPHP
* Handle `enum` and `default` properties from SwaggerPHP annotation
* Support `@Security` annotations

Config
* `nelmio_api_doc.routes` has been replaced by `nelmio_api_doc.areas`. Please update your config accordingly.

  Before:
  ```yml
  nelmio_api_doc:
      routes: [ path_patterns: [ /api ] ]
  ```

  After:
  ```yml
  nelmio_api_doc:
      areas: [ path_patterns: [ /api ] ]
  ```

## 3.0.0 (2017-12-10)

Large refactoring introducing `zircote/swagger-php` for swagger annotations.

See UPGRADE-3.0.md for upgrading instructions.
