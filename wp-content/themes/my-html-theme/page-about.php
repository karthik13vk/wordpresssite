    
   <?php $theme_url = get_template_directory_uri(); ?>
   <?php get_header(); ?>
    <!-- services-section -->
    <section class="services-section section-padding ">
      <div class="container">
        <div class="services-inner-content scroll-animation">
          <div class="services-content-section grid-2 md-grid-1">
            <div class="services-left">
              <div class="title-section">
                <h6 class="sub-title">Our Services</h6>
                <h2 class="main-title">
                  Powerful digital solutions <br />
                  that redefine the way <br />
                  work gets done
                </h2>
              </div>
            </div>
            <div class="services-right grid-2 md-grid-2 sm-grid-1">
              <div class="services-box">
                <div class="services-img">
                  <img
                    src="<?php echo $theme_url; ?>/assets/images/digital-transformation.png"
                    alt="img"
                  />
                </div>
                <div class="services-content">
                  <h4>Digital Engineering</h4>
                  <p>
                    Agile & Scrum process | Dev Practices | Platforms | Dev
                    Support | DevSecOps | Cloud Support | Apps & Products | API
                    | Front & Back End | Quality Assurance
                  </p>
                </div>
              </div>
              <div class="services-box">
                <div class="services-img">
                  <img src="<?php echo $theme_url; ?>/assets/images/cloud_devops.png" alt="img" />
                </div>
                <div class="services-content">
                  <h4>Cloud & Devops</h4>
                  <p>
                    AWS | Google Cloud | Azure | Oracle Maven | Selenium | Jira
                    | Bitbucket | Terraform | Prometheus | Kubernetes | Grafana
                    | Docker | Sonarqube | Synk
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="services-bottom grid-4 md-grid-2 sm-grid-1">
            <div class="services-box">
              <div class="services-img">
                <img src="<?php echo $theme_url; ?>/assets/images/saas-product-development.png" alt="img" />
              </div>
              <div class="services-content">
                <h4>Saas Product Development</h4>
                <p>
                    Planning | Jira | XD | Figma
                    Kotlin | Java | Swift | Angular | Node JS |
                    Mango DB | Manual Testing | Selenium | Maven | Cucumber | Appium | JMeter
                </p>
              </div>
            </div>
            <div class="services-box">
              <div class="services-img">
                <img src="<?php echo $theme_url; ?>/assets/images/unified-chat-solutions.png" alt="img" />
              </div>
              <div class="services-content">
                <h4>Unified Chat Solutions</h4>
                <p>
                  Integrate SDK in 20 mins | Customizable | Low-code Strategy | Complete Ownership
                   | Pre-built UI Kit | On-premise | Encryption | On-cloud Hosting |
                   Ironclad Security
                </p>
              </div>
            </div>
            <div class="services-box">
              <div class="services-img">
                <img src="<?php echo $theme_url; ?>/assets/images/media-streaming-ott.png" alt="img" />
              </div>
              <div class="services-content">
                <h4>Media Streaming OTT</h4>
                <p>
                  Agile & Scrum process | Dev Practices | Platforms | Dev
                  Support | DevSecOps | Cloud Support | Apps & Products | API |
                  Front & Back End | Quality Assurance
                </p>
              </div>
            </div>
            <div class="services-box">
              <div class="services-img">
                <img src="<?php echo $theme_url; ?>/assets/images/iot-connected-vehicles.png" alt="img" />
              </div>
              <div class="services-content">
                <h4>IoT & Connected Vehicles</h4>
                <p>
                    Industry 4.0 | Connected Vehicle | Predictive Maintenance | Smart Healthcare
                    ASD | Smart Manufacturing | Security | Device Management | Data Visualization
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- services-section -->

             <?php get_footer(); ?>